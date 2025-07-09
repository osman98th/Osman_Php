<?php
echo file_put_contents("myfile.txt","hi");

echo "<br>";
//explode() function
// explode(separator,string,limit);
$data ="this is our php class";

print_r(explode(" ",$data,2))
?>