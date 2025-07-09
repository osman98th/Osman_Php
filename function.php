<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <?php
function multiply($x, $y = 2) {
    return $x * $y;
}

echo multiply(5);     // 10
echo multiply(5, 3);  // 15

function sayHello(&$who) {
    $who = strtoupper($who);
}
$name = "sohel";
sayHello($name);
echo $name;  // SOHEL
?>

</body>
</html>