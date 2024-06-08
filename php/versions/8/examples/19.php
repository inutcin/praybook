<?php
declare(strict_types=1);

/*
Вызов нестатического метода статически выбрасывает исключение Error.  
До PHP 8.0.0 это приводило к уведомлению об устаревании, а переменная $this 
оставалась неопределённой. [FIXME](./examples/19.php)
*/


class Foo
{
    public function nonStaticMethod() : int {
        return 1;
    }
}

$obj = new Foo;

try {
    $obj::nonStaticMethod();
}
catch(\Throwable $e) {
    var_dump($e::class);
}

/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>
string(5) "Error"
<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/