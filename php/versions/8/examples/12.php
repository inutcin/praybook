<?php
declare(strict_types=1);
/*
Теперь можно писать catch (исключение) для ловли исключений без их сохранения в 
переменной.
*/ 
$nullableValue = null;
 
try {
    $value = $nullableValue ?? throw new \InvalidArgumentException();
} catch (\InvalidArgumentException) {
    var_dump("Something went wrong");
}
 
 
exit;
/*
output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
string(20) "Something went wrong"
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/