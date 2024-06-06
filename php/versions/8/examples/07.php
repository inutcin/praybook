<?php
declare(strict_types=1);
 
/*
New и instanceof теперь можно использовать с произвольными выражениями: 
new (выражение)(...$args) и $obj instanceof (выражение).
*/

class A{}

$new = new (str_replace("dd", "", "Add"));
$instanceOf = ($new instanceof ("DNA"[2]));
var_dump($new, $instanceOf);
/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>
object(A)#1 (0) {
}
bool(true)

<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/