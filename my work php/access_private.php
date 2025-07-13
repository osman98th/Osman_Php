<?php

class MyClass {
    private $secret;

    public function __construct($secret) {
        $this->secret = $secret;
    }

    public function revealSecret() {
        echo $this->secret; 
         // private property, শুধু এই ক্লাসেই অ্যাক্সেসযোগ্য
    }
}


?>