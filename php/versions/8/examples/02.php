<?php
declare(strict_types=1);
/**
Слабые карты (weak maps) позволяют создавать связи между объектами и 
произвольными значениями (как и SplObjectStorage), при этом объекты, 
используемые в качестве ключей, не защищаются от сборщика мусора. Если сборщик 
уничтожает такой объект, тот просто удаляется из карты.

Это очень полезная фича. Она позволяет нам ещё меньше думать об утечках памяти 
в коде. Хотя для большинства PHP-разработчиков это не должно быть проблемой, но 
стоит обращать внимание при создании долгоиграющих процессов, например, 
используя ReactPHP. С WeakMaps ссылки на объекты автоматически собираются 
сборщиком мусора, когда объект становится недоступен.

Если вы сделаете то же самое с массивом, то ссылки на объект сохранятся, что 
приведёт к утечке памяти.

 */
 
class FooBar {
    public WeakMap $cache;
    
    public function __construct() {
      $this->cache = new WeakMap();
    }
 
    public function getSomethingWithCaching(object $obj) {
        return $this->cache[$obj] ??= $this->computeSomethingExpensive($obj);
    }
    
    public function computeSomethingExpensive(object $obj) {
    var_dump("I got called");
    return rand(1, 100);
    }
}
 
$cacheObject = new stdClass;
 
$obj = new FooBar;
// "I got called" only will be printed once
$obj->getSomethingWithCaching($cacheObject);
$obj->getSomethingWithCaching($cacheObject);
 
var_dump(count($obj->cache));
 
// When unsetting our object, the WeakMap frees up memory
unset($cacheObject);
 
var_dump(count($obj->cache));
 
exit;

/*
Output
>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
string(12) "I got called"
int(1)
int(0)

<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
*/