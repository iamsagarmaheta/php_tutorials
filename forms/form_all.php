<?php
    if(isset($_POST["firstName"]) == false)
    {
        die("Invalid Form.");
    }
    echo "<pre>";
    print_r($_POST);
    echo "</pre> <br/> <hr/>";

    echo "<br>".$_POST["firstName"];
    echo "<br>".$_POST["phoneNumber"];
    
    echo "<br>";
    for($index = 0; $index < count($_POST["hobby"]); $index++)
    {
        echo $_POST["hobby"][$index] . ", ";
    }

?>