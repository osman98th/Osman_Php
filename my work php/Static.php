
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>
         <?php
        class user {
            const name ="Hellow world!" . "<br>";

        public static function info() {
                 echo "This is Static method <br>";       
                 }
        }
         
            echo user ::info ();
            echo user :: name ;
            // echo user :: $name= "Hellow world!" . "<br>";
                        // hide message
         
         ?>
</body>
</html>