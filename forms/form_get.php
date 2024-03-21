<?php
    if(isset($_GET["firstName"]) == false || isset($_GET["lastName"]) == false)
    {
        die("Invalid Request.");
    }

    echo "<pre>";
    print_r($_GET);
    
    echo "First Name : " .$_GET["firstName"];
    echo "<br/>Last Name : " .$_GET["lastName"];
    
    echo "</pre>";
?>