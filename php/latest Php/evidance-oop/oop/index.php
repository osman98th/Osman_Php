<?php
require_once("student_class.php");

if(isset($_POST["btnSubmit"])){
	
	$id=$_POST["txtId"];
	$name=$_POST["txtName"];

	$student=new Student($id,$name); 	
		$student->store();
		echo "Congratulations!";
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Registration Form</title>
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
	<input type="submit" name="btnSubmit" value="Submit" />
	</div>
</form>
<?php
 Student::display_students();
?>
</body>
</html>