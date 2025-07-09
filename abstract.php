<?php 
abstract class c{ 
    abstract public function getName();
  
    public function display(){ 
        echo "og";
    }

}


    // interface
class Msc extends  c{ 
    public function getName(){ 
        echo "nafi";
    }
  
    public function display(){ 
        echo "og";
    }
}
class We extends  c{ 
    public function getName(){ 
        echo "nafi2";
    }
  
    public function display(){ 
        echo "og";
    }
}


$add = new we;
$add->getName();
?>