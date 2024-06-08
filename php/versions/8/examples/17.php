<?php
declare(strict_types=1);
/*
Когда результат левой части оператора равен null, исполнение всей цепочки 
останавливается, а её результат приравнивается к null. В противном случае 
цепочка ведёт себя как обычный оператор ->.
*/
 
class User {

    public function __construct(
        public $country = null
    )
    {
    }

    public function getAddress():static 
    { 
        return $this;
    }   
}
 
$user = new User();
 
$country = $user?->getAddress()?->country?->iso_code;
 
var_dump($country);
var_dump($user);
 
exit;

/*
output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
NULL
object(User)#1 (1) {
  ["country"]=>
  NULL
}
<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/