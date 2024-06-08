<?php
declare(strict_types=1);
/*
Предложено добавить простой синтаксис, позволяющий комбинировать конструктор с 
определением свойств:
*/
class User {
    public function __construct(
        public int $id,
        public string $name,
    ) {}
}
 
$user = new User(1, 'Marcel');
 
var_dump($user->id);
var_dump($user->name);
 
exit;
/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
int(1)
string(6) "Marcel"

<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/