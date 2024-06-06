<?php
declare(strict_types=1);

/*
Возвращаемый тип static теперь можно использовать для определения ситуации, что 
метод возвращает класс, для которого этот метод и был вызван, даже если он был 
унаследован (позднее статическое связывание).
 */

class Test {
    public function doWhatever(): static {
        // Do whatever.
        return $this;
    }
}

$object = new Test;

$result = $object->doWhatever();

var_dump($result, $object);

exit;
/*
output
>>>>>>>>>>>>>>>>>>>>>>>>>
object(Test)#1 (0) {
}
object(Test)#1 (0) {
}
<<<<<<<<<<<<<<<<<<<<<<<<<
*/