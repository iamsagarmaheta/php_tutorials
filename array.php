<?php
    echo "Array <br/>";

    $numbers = [1,2,3,"4",5];
    $moreNumbers = array(9,"8",7,6);
    $rollNumber = 50;

    // update values
    $numbers[2] = 30;
    
    // add more number
    $numbers[5] = 60;
    $numbers[] = 70;
    $numbers[count($numbers)] = count($numbers) * 10;

    var_dump($rollNumber);
    echo "<br/> <hr/>";
    var_dump($numbers);
    echo "<br/> <hr/>";
    var_dump($moreNumbers);
    echo "<br/> <hr/>";
    print_r($moreNumbers);

    echo "Elements Before Delete : <br/>";
    for($index = 0; $index < count($numbers); $index++)
    {
        echo "<br/>$index = " . $numbers[$index];
    }
    
    // delete a number
    unset($numbers[2]);

    

    echo '<pre>';
    var_dump($numbers);
    print_r($moreNumbers);
    echo '</pre>';

?>