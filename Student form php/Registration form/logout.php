<?php
session_start();
unset($_SESSION["sname"]);
session_destroy();
header("location:login 2.php");
exit();
?>