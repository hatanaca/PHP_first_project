<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First_php_project</title>
</head>
<body>
    <?php 
const MYCAR = "Volvo";
echo MYCAR;

    echo "Hello";

    $hostname = "localhost";
    $bancoDeDados = "sakila";
    $password = "Pipoca12124517@";
    $username = "root";

    $mysqli = new mysqli($hostname, $username, $password, $bancoDeDados);


?>
    <br>
    <a href="register.php">Register</a><br>
    <a href="login.php">Login </a>
</body>
</html>