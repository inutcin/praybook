<?php
declare(strict_types=1);
/*
В PHP 8 появился новый интерфейс Stringable, который добавляется автоматически, 
как только класс реализует метод __toString. Вам не нужно явно реализовывать 
этот интерфейс.
*/
 
class Foo {
    public function __toString() {
        return 'I am a class';
    }
}

class Bar {
}
 
$foo = new Foo;
$bar = new Bar;
var_dump($foo instanceof Stringable);
var_dump($bar instanceof Stringable);

/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
bool(true)
bool(false)

<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/

exit;