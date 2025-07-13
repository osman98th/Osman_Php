
<?php 
class A{

     public $name;
  
 function __destruct()
 {
    echo "ali"; 
 }

 function Show(){ 
    echo "This is my parent Show method"."<br/>";
 }

 function info(){ 
    echo "This is my parent info method"."<br/>";
 }

function __construct($name){ 
        echo "This is <br>".$this->name=$name;
}

}

 class B extends A{ 
    public $contact;
    public $email;
    function fullInfo(){ 
        echo  "bangladesh!";
    }
    function __construct($name,$contact) {
     echo "This is  ". $this-> name = $name;
       echo " she and lives in ".$this-> contact = $contact;
    }

 }



 class C extends B{
     public $age;
     function display(){ 
        echo "show all information";
     }
     function __construct(){ 
        echo "This is child class";
     }
 }

$b = new C();
echo  "<br>";
$b->display();
echo  "<br>";
$b->fullInfo();
 echo  "<br>";
$b->Show();

$b->info();
 echo  "<br>";


?>
