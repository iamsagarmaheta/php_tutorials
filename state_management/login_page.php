<?php
    session_start();
    if(isset($_SESSION["username"]))
    {
        header("location:homepage.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        Username : <input type="text" name="userName" required>
        <br/>Password : <input type="password" name="password" required>
        <br/><input type="submit" value="Login">
    </form>
</body>
</html>
