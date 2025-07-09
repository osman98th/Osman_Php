<?php
require_once("student 2.php");

if(isset($_POST["btnSubmit"])){
	
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];
	$course=$_POST["txtCourse"];
	$phone=$_POST["txtPhone"];	
	
	if(preg_match("/^[0-9+]{11,14}$/",$phone)){		
   
		$student= new Student($id,$name,$course,$phone); 	
		$student-> save();
		echo "Congratulations!";
	
    }
	
	else{
	   echo "Invalid Phone";	 
    }
}
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nowrin</title>
</head>

<body>

<form action="#" method="post">
<div>
ID:<br/>
<input type="text" name="txtId" />
</div>

<div>
Name<br/>
<input type="text" name="txtName" />
</div>

<div>
Course<br/>
<input type="text" name="txtCourse" />
</div>

<div>
Phone<br/>
<input type="text" name="txtPhone" />
</div>

<div>
<input type="submit" name="btnSubmit" value="Submit" />
</div>
</form>

<?php
 Student::display_students();
?>
</body>
</html>