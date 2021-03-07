<?php
class FooFighters {
    public $foo;
    public function __construct() {
         $this->foo = array();
         $this->foo[] = 'foo';
    }
    public function getRandomFoo() {
         $random = random_int(0, count($this->foo)-1);
         return $this->foo[$random];
    }
}
