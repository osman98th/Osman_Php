<?php 
interface og{ 
    public function getName();
    public function info();
    public function display();
   

}

class Islam implements og{ 
    public function getName(){ 
        echo "Alhamdulillah";
         echo "<br>";
    }
       
    public function info(){ 
        echo "Subhan_Allah";
          echo "<br>";
    }
    public function display(){ 
        echo "Muhanmmad";
          echo "<br>";
    }
}

$add = new Islam;
$add->getName();
$add->info();
$add->display();
?>