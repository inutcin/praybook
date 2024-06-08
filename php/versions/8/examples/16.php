<?php
declare(strict_types=1);

/*
Предложено добавить новое выражение match, которое аналогично switch, только с 
более безопасной семантикой и возможностью возвращать значения.
*/
 
echo match (1) {
    0 => 'Foo',
    1 => 'Bar',
    2 => 'Baz',
};
 
exit;
/*
Output
>>>>>>>>>>>>>>>>>>
Bar
<<<<<<<<<<<<<<<<<<
*/exit;