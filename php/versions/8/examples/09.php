<?php
declare(strict_types=1);

/**
 Теперь трейты могут определять абстрактные приватные методы (RFC)
 */
 
trait MyTrait {
    abstract private function neededByTheTrait(): string;
 
    public function doSomething() {
        return strlen($this->neededByTheTrait());
    }
}
 
class TraitUser {
    use MyTrait;
 
    // This is allowed:
    private function neededByTheTrait(): string { }
 
    // This is forbidden (incorrect return type)
    // private function neededByTheTrait(): stdClass { }
 
    // This is forbidden (non-static changed to static)
    // private static function neededByTheTrait(): string { }
}
 
exit;