<?php
    $arr = [
        [1,2,3, "Hello"],
        [4,5,6, "Bye"],
        [7,8,9]
    ];

    $arr[] = [11,12,13,"hello"];
    $arr[] = [100];

    unset($arr[count($arr)-1]);

    print_r($arr);
    echo "<br />".$arr[1][1];

    for($row = 0; $row < 3; $row++)
    {
        echo "<br/>";
        for($col = 0; $col < 3; $col++)
        {
            echo $arr[$row][$col] . ", ";
        }
    }

    echo "<br/>";
    foreach($arr as $singleRow)
    {
        echo "<br/>";
        //print_r($singleRow);
        foreach($singleRow as $singleCell)
        {
            echo $singleCell . ", ";
        }
    }

?>