<?php
if(isset($_POST['submit'])){
    $name = $_FILES['file']['name'];
    $add = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $type = $_FILES['file']['type'];
    $img = "image/";
    $support = 1;
    $Kb =$size/1024;

    if($Kb>600){
        echo "<b style='color: red; font-size: 15pt;'> File is Too Large!! </b>";
    }
    
    elseif($type != "image/jpeg" && $type != "image/jpg" && $type != "image/png" && $type != "image/gif"){
            echo "<b style='color: red; font-size: 15pt;'> File Type is not Supported </b>";
            $support = 0;
    }
    

    else {
            move_uploaded_file($add, $img . $name);

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style=" width:500px; margin:10px auto">
    <form action="#" method="post" enctype="multipart/form-data">
        <fieldset>
            <input type="file" name="file" ><br><br>
            <input type="submit" name="submit" >        
            
        </fieldset>
    </form>

<?php
   if(isset($_POST["submit"])){

    echo "<div style='text-align:center;margin: auto'>
                <img src='{$img}{$name}' width='400px' style='margin-top: 25px'>
              </div>";
   }
        
    
 ?>
    </div>
</body>
</html>