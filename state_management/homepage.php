<?php
    session_start();
    if(isset($_SESSION["username"]) == false)
    {
        header("location:login_page.php");
    }
    $userName = $_SESSION["username"];
    echo "<h1>Welcome, $userName</h1>";
    echo "<a href='logout.php'>Logout</a>";
?>
