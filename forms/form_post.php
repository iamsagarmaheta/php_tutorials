<?php
    if(isset($_POST["firstName"]) == false || isset($_POST["lastName"]) == false)
    {
        die("Invalid Request.");
    }

    $fname = trim($_POST["firstName"]);
    $lname = trim($_POST["lastName"]);

    if($fname == "")
    {
        die("Enter First Name.");
    }
    if(trim($_POST["lastName"]) == "")
    {
        die("Enter Last Name.");
    }

    echo "<pre>";
    print_r($_POST);
    
    echo "First Name : " .$fname;
    echo "<br/>Last Name : " .$lname;
    
    $password = trim($_POST["pass"]);
    $pass_hash = password_hash($password, PASSWORD_DEFAULT);
    $pass_hash2 = password_hash($password, PASSWORD_BCRYPT);
    $pass_hash3 = password_hash($password, PASSWORD_ARGON2ID);
    echo "<br />Pass : ". $password;
    echo "<br />Pass Hash 1 : ". $pass_hash;
    echo "<br />Pass Hash 2 : ". $pass_hash2;
    echo "<br />Pass Hash 3 : ". $pass_hash3;

    $pass_verify = password_verify($password, $pass_hash);
    $pass_verify2 = password_verify($password, $pass_hash2);
    $pass_verify3 = password_verify($password, $pass_hash3);
    echo "<br />pass_verify : ". $pass_verify;
    echo "<br />pass_verify 2 : ". $pass_verify2;
    echo "<br />pass_verify 3 : ". $pass_verify3;

    echo "</pre>";
?>