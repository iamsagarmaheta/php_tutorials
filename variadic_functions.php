<?php
    function addNumbers(int $num1, int $num2):int
    {
        return $num1 + $num2;
    }

    echo addNumbers(10, 25);

    function addManyNumbers()
    {
        $num_arr = func_get_args();
        for($index = 0; $index < count($num_arr); $index++)
        {
            echo "<br/>". $index . " -> ".$num_arr[$index];
        }
    }

    echo addManyNumbers(10,20,30)."<br/>";
    echo addManyNumbers(40,50)."<br/>";
?>