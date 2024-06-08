<?php
declare(strict_types=1);
/*
Есть несколько предложений по внедрению атрибутов в PHP 8:

https://wiki.php.net/rfc/attributes_v2
https://wiki.php.net/rfc/attribute_amendments
https://wiki.php.net/rfc/shorter_attribute_syntax
https://wiki.php.net/rfc/shorter_attribute_syntax_change

Это одно из крупнейших изменений в PHP 8. Возможно, сначала с ними не так легко 
будет разобраться. Если кратко, то атрибуты позволяют добавлять метаданные в 
PHP-функции, параметры, классы и т.д. Эти метаданные можно потом программно 
извлекать. Если в PHP 7 или ниже вам потребуется парсить docblock`и, атрибуты 
помогут обратиться к этой информации, глубоко интегрированной в сам PHP.

Чтобы было понятнее, представим, что вашим пользователям нужно дать возможность 
добавлять промежуточное ПО в контроллер класса или метода с помощью 
использования атрибута.
*/

// First, we need to define the attribute. An Attribute itself is just a plain PHP class, that is annotated as an Attribute itself.
 
#[Attribute]
class ApplyMiddleware
{
    public array $middleware = [];
 
    public function __construct(...$middleware) {
        $this->middleware = $middleware;
    }
}
 
// This adds the attribute to the MyController class, with the "auth" middleware as an argument.
 
#[ApplyMiddleware('auth')]
class MyController
{
    public function index() {}
}
 
// We can then retrieve all ApplyMiddleware attributes on our class using reflection
// And read the given middleware arguments.
 
$reflectionClass = new ReflectionClass(MyController::class);
 
$attributes = $reflectionClass->getAttributes(ApplyMiddleware::class);
 
foreach ($attributes as $attribute) {
    $middlewareAttribute = $attribute->newInstance();
    dump($middlewareAttribute->middleware);
}
 
exit;