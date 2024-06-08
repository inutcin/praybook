<?php
declare(strict_types=1);
/*
Именование позволяет передавать аргументы функции в зависимости от имени 
параметра, а не от его позиции. То есть значения аргументов становятся 
самодокументирующимися, а аргументы перестают зависеть от порядка перечисления, 
поэтому можно произвольно пропускать значения по умолчанию.
*/

function test(int $from, int $to, string $value):mixed
{
    return [
        "from"  => $from,
        "to"    => $to,
        "value" => $value
    ];
}

var_dump(test(value: "val", to: 100, from: 50));
 
/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
array(3) {
  ["from"]=>
  int(50)
  ["to"]=>
  int(100)
  ["value"]=>
  string(3) "val"
}
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/