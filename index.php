<?php
    $user_name = "Sagar";    
    $age = 28;

    $user_name = "Sagar Maheta";
    $age = "Twenty Eight";

    // constant define
    define("degree", "MCA");

    // another way to define constant
    const total_projects = 70;
    
    /*
        Multi Line Comments
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML FILE</title>
</head>
<body>
    <?php 
        echo "<h2>Hello From HTML To $user_name.</h2>"; 
    ?>
    <ul>    
        <li><?php echo "<u>Degree : " . degree . "</u>"; ?></li>
        <li><?php echo $age; ?></li>
        <li><?php echo degree; ?></li>
        <li><?php echo total_projects; ?></li>
    </ul>
</body>
</html>