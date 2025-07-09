<?php
class A {
    public static $value = 34;

    public function staticValue() {
        return self::$value;
    }

    public static function show() {
        return "This is Static method";
    }

    public function applyStatic() {
        return self::show();
    }
}

class B extends A {
    public function xStatic() {
        return parent::$value;
    }

    // If B overrides show(), self::show() in A still calls A::show()
    public static function show() {
        return "This is B's static method!";
    }
}

$p = new c();
echo $p->applyStatic(); // Outputs: This is Static method
