<?php
    $evenNumber = [2,4,8,10];
    $oddNumber = [1,3,5,7];

    //$allNumbers = array();

    // for($index = 0; $index < count($evenNumber); $index++)
    // {
    //     $allNumbers[] = $evenNumber[$index];
    // }
    // for($index = 0; $index < count($oddNumber); $index++)
    // {
    //     $allNumbers[] = $oddNumber[$index];
    // }

    $allNumbers = [...$evenNumber];

    echo "<br />";
    print_r($allNumbers);
?>