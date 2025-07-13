<?php
session_start();

// Check if the login form is submitted
if (isset($_POST["Login"])) {
    // Get user input
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);
    
    // Read the data from the file
    $file = file("data.txt");
    
    // Loop through the file and check for matching credentials
    foreach ($file as $line) {
        // Split the line into username and hashed password
        list($_username, $_password) = explode(",", trim($line));

        // Trim whitespace and compare the username
        if (trim($_username) === $username) {
            // Verify the password using password_verify() for hashed password
            if (password_verify($password, trim($_password))) {
                // Password is correct, start the session and redirect
                $_SESSION["sname"] = $username;
                header("Location: mainform.php");
                exit();
            } else {
                // Password is incorrect
                $msg = "Username or Password is incorrect!";
            }
        }
    }
    // If no matching username is found
    if (!isset($msg)) {
        $msg = "Username or Password is incorrect!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            background-color: #f0f8ff;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 350px;
            background-color: #5945a0bd;
            padding: 30px;
            margin: 80px auto;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #f899d39d;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
        }

        .login-container input[type="submit"]:hover {
            background-color: #5945a0bd;
        }

        .error-message {
            color: red;
            text-align: center;
            font-weight: bold;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login Information</h2>
    
    <?php 
    // Display error message if login failed
    if (isset($msg)) {
         echo "<div class='error-message'>$msg</div>"; 
    } 
    ?>

    <form action="#" method="post">
        Username:
        <input type="text" name="username" required>

        Password:
        <input type="password" name="password" required>

        <input type="submit" name="Login" value="Log In">
    </form>
</div>

</body>
</html>
