<?php
//Step 6:
class Student{   
   private $id;
   private $name; 
   private $email; 
   
   private static $file_path="data.txt"; 
   
     function __construct($_id,$_name, $_email){
	       $this->id=$_id;
	       $this->name=$_name;
	       $this->email=$_email;
	
   }
  
       public function mbbs(){
	 return $this->id.",".$this->name.",".$this->email.PHP_EOL; 


   }
   
  
   public function storeData(){
		    file_put_contents(self::$file_path,$this->mbbs(),FILE_APPEND);  
	   
   }
      
   public static function display_students(){
	    $students=file(self::$file_path);
		  echo "<b>ID | Name | Email</b><br/>";

		foreach($students as $d){
				   list($id,$name,$email)=explode(",",trim($d));
				   echo "$id , $name , $email<br/>";   
	    }
					
   }   
 
}

?>