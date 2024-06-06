<?php
declare(strict_types=1);
/** 
 * В PHP 8 появился новый встроенный класс исключений ValueError. Он дополняет 
 * собой \Exception. PHP бросает такое исключение каждый раз, когда вы передаёте 
 * функции значение правильного типа, однако его нельзя использовать в этой 
 * операции. Раньше в таких случаях выдавалось предупреждение. Примеры: 
*/


/**
 * We pass an array to array_rand,
 * which is of the correct type. But
 * array_rand expects non-empty arrays.
 *
 * This throws a ValueError exception.
 */
try{
    array_rand([], 0);
}
catch(ValueError $e){
    var_dump($e->getMessage());
}
/*
output 
>>>>>>>>>>>>>>>>>>>>>>
string(50) "array_rand(): Argument #1 ($array) cannot be empty"
<<<<<<<<<<<<<<<<<<<<<<
*/
 
/**
 * The depth argument for json_decode is a
 * valid integer, but it must be greater than 0
 */
try{
    json_decode('{}', true, -1);
}
catch(Throwable $e){
    var_dump($e::class);
}
/*
output
>>>>>>>>>>>>
string(10) "ValueError"
<<<<<<<<<<<<
*/