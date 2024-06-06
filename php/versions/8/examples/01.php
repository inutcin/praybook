<?php
declare(strict_types=1);

/**
 * Тип union принимает значения разных других типов, а не только какого-то одного.
 */
 
class Number {
    private int|float|string $number;
 
    public function setNumber(int|float|string $number): void {
        $this->number = $number;
    }
 
    public function getNumber(): int|float|string {
        return $this->number;
    }
}
 
$number = new Number();
 
$number->setNumber(5);
var_dump($number->getNumber());
 
$number->setNumber(11.54);
var_dump($number->getNumber());
 
$number->setNumber("11.54");
var_dump($number->getNumber());

/*
 Outputs

>>>>>>>>>>>>>>>>
int(5)
float(11.54)
string(5) "11.54" 
<<<<<<<<<<<<<<<<
*/

exit;
