<?php
declare(strict_types=1);
/*
В PHP 8 появился новый тип mixed. Он может быть эквивалентен типам 
    - array, 
    - bool, 
    - callable, 
    - int, 
    - float, 
    - null, 
    - object, 
    - resource, 
    - string.
*/ 

function debug_function(mixed ...$data) {
    var_dump($data);
}
 
debug_function(1, 'string', []);
 
exit;
/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
array(3) {
  [0]=>
  int(1)
  [1]=>
  string(6) "string"
  [2]=>
  array(0) {
  }
}
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/