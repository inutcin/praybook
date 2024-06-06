<?php
declare(strict_types=1);

/*
Теперь можно извлекать имя класса объекта с помощью $object::class. Результат 
будет такой же, как в случае с get_class($object).
*/

class Test {
    public function build(): static 
    {
        return $this;
    }
}

$obj = new Test;
var_dump(
    $obj::class,
    Test::class,
    (new Test)::class,
    (new Test)->build()::class,
);
exit;
/*
output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
string(4) "Test"
string(4) "Test"
string(4) "Test"
string(4) "Test"
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/