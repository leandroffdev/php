<?php 
    if($_GET) {
        $login = $_GET['login'];
        $password = $_GET['password'];

        echo $login . ' ' . $password;
    }

    if($_POST) {
        $login = $_POST['login'];
        $password = $_POST['password'];

        echo "login:" . $login;
        echo "password: " . $password;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST in PHP</title>
</head>
<body>
    <form action="" method="POST">
        <label for="login">Login</label>
        <input type="text" id="login" name="login" placeholder="Enter your login">
        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="********">
        <br>
        <button type="submit" onclick="">Send</button>
    </form>
</body>
</html>