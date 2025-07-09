<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
class FormDetails{
    private $cname;
    private $cont;

    public static $file_path ="data.txt";

  function __construct($_cname,$_cont){
      $this->cname=$_cname;
      $this->cont=$_cont;
  }

  public function data_store(){ //child function
    return $this->cname.",".$this->cont.PHP_EOL; //End of Line or create new line
  }

  public function dstore(){
    file_put_contents(self::$file_path,$this->data_store(),FILE_APPEND);
  }  
  
  
}
?>
</body>
</html>