<?php
declare(strict_types=1);
 
/*
Вариативным аргументом теперь можно заменить любое количество параметров 
функции, если их типы совместимы. Например, следующий код некорректен:
*/
class B {
    public function method(...$everything) {
        var_dump($everything);
    }
}
 
$b = new B();
$b->method('i can be overwritten!', 1, new stdClass, [], true);
exit;
/*
output 
>>>>>>>>>>>>>>>>>>>>>
array(5) {
  [0]=>
  string(21) "i can be overwritten!"
  [1]=>
  int(1)
  [2]=>
  object(stdClass)#2 (0) {
  }
  [3]=>
  array(0) {
  }
  [4]=>
  bool(true)
}
<<<<<<<<<<<<<<<<<<<<
*/