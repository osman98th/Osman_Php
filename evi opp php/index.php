<?php
require_once("student_class.php");

if (isset($_POST["submit"])) {
    $cname  = $_POST["cname"];
    $cont = $_POST["cont"];
    $student = new FormDetails($cname, $cont);
    $student->dstore();
    echo "<h2>Successful!</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Registration Form</title>
   <style>
        div{
            background-color: deepskyblue;
            width: 200px;
            height: 180px;
            margin: 10px;
            padding: 10px;
            border-radius: 10px;
            font-weight:bolder;

        }
    </style>
</head>
<body>
    <div>
  <form method="POST" action="#">
     <fieldset>
            <legend style="text-align: center; font-weight: bolder; font-size: larger; color: black;"> Registration Form</legend>
      Name:<br>
      <input type="text" name="cname" id="cname" required><br><br>

      Contact:<br>
      <input type="number" name="cont" id="cont" required><br><br>

      <input type="submit" name="submit" value="Submit" style="width: 55px; background-color: aqua;">
      </fieldset>
  </form>
  </div>
</body>
</html>