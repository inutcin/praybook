<?php
declare(strict_types=1);
 
/*
Выражение throw теперь можно использовать там, где допускаются только выражения: 
в стрелочных функциях, coalesce-операторах тернарных условных операторах 
(ternary/elvis). 
*/

$callable = fn() => throw new Exception();
 
// $value is non-nullable.
$value = null ?? throw new \InvalidArgumentException();
 
exit;
/*
output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
PHP Fatal error:  Uncaught InvalidArgumentException in /home/r-asian/pack/Projects/Personal/github/praybook/php/versions/8/examples/10.php:13
Stack trace:
#0 {main}
  thrown in praybook/php/versions/8/examples/10.php on line 13

<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/