<?php
class ParentClass {
    protected $message;

    public function __construct($msg) {
        $this->message = $msg;
    }
}

class ChildClass extends ParentClass {
    public function showMessage() {
        echo $this->message; 
         // protected property, subclass থেকে অ্যাক্সেস করা যাচ্ছে
    }
}


?>
