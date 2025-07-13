<!DOCTYPE html>
<html>
<head>
    <title>Prime or Composite Checker</title>
</head>
<body>

    <h2>Check if a Number is Prime or Composite</h2>

    <form method="post" action="">
        Enter a number: <input type="number" name="num" required>
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num = $_POST['num'];

        if ($num == 0 || $num == 1) {
            echo "<h3> $num The number is NOT Prime or Composite.</h3>";
        } else {
            $isPrime = true;

            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }

            if ($isPrime) {
                echo "<h3> $num The number is Prime.</h3>";
            } else {
                echo "<h3> $num The number is Composite.</h3>";
            }
        }
    }
    ?>

</body>
</html>