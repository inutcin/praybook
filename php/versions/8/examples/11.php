<?php
declare(strict_types=1);
/*
По аналогии с висящей запятой в массивах, теперь можно определять её и в 
параметрах списка.
*/

function method_with_many_arguments(
    $a, 
    $b,
    $c,
    $d,
) {
    var_dump("this is valid syntax");
}
 
method_with_many_arguments(
    1,
    2,
    3,
    4,
);
 
exit;
/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
string(20) "this is valid syntax"
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/
