<?php
    if(isset($_POST["userName"]) == false || isset($_POST["password"]) == false)
    {
        die("Invalid Request");
    }

    // check if password is correct
    $userName = $_POST["userName"];

    // store data in session
    session_start();
    $_SESSION["username"] = $userName;    

    $redirect_url = "homepage.php";
    header("location:$redirect_url");
?>