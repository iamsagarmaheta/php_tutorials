<?php
    $numbers = [2,3,4];
    $numbers[] = 5;
    
    // add element at beginning
    array_unshift($numbers, 1);

    // add element at the end
    array_unshift($numbers, -3,-2,-1,0);

    $person_list = [
        "S" => "Sagar",
        "K" => "Kashak"
    ];

    $person_list = ["P" => "Palak"] + $person_list;
    echo "<pre>";
    print_r($numbers);
    echo "<br />";
    print_r($person_list);
    

    // add one or more number at the end
    array_push($numbers, 6, 7, 8);
    
    // add at end in assoc array
    $person_list["A"] = "Arnold";

    echo "<br />";
    print_r($numbers);
    echo "<br />";
    print_r($person_list);

    // remove from end
    echo array_pop($numbers) . " Deleted";

    // remove 5 elements from end
    if(count($numbers) >= 5)
    {
        for($index = 1; $index <= 5; $index++)
        {
            echo array_pop($numbers) . " Deleted.<br/>";
        }
    }

    // remove from start
    echo array_shift($numbers) . " Deleted";

    echo "<br />";
    print_r($numbers);
    echo "<br />";
    print_r($person_list);

    // to print keys of an array
    print_r(array_keys($person_list));

    echo "<br/> Exists S : " . array_key_exists("S", $person_list);


    $name = "Sagar";
    // if this value is set
    echo "<br/> Is Set : ". isset($name);

    // find element in array
    $search = "Kashak";
    $isFound = false;
    foreach($person_list as $key => $value)
    {
        if($value == $search)
        {
            echo "<br/>$search Madi Gyo.";
            $isFound = true;
            break;
        }
    }
    if($isFound == false)
    {
        echo "<br/>$search Khovai Gyo";
    }

    // to find value in array
    if(in_array($search, $person_list))
    {
        echo "<br/>$search Madi Gyo.";
    }
    else
    {
        echo "<br/>$search Khovai Gyo";
    }

    $new_nums = [10,20,'30',40,50];
    $search = 30;
    if(in_array($search, $new_nums, true))
    {
        echo "<br/>$search Madi Gyo.";
    }
    else
    {
        echo "<br/>$search Khovai Gyo";
    }


    $colors = [
        ['red', 'green', 'blue'],
        ['cyan', 'magenta', 'yellow', 'black'],
        ['hue', 'saturation', 'lightness']
    ];
    echo "<br/>";
    if (in_array(['green', 'red', 'blue'], $colors)) {
        echo 'RGB colors found';
    } else {
        echo 'RGB colors are not found';
    }

    echo "<br/> Reverse : ";
    $new_nums = array_reverse($new_nums, true);
    print_r($new_nums);

    $mergerdArray = array_merge($new_nums, $colors, $person_list);
    print_r($mergerdArray);

    echo "</pre>";

?>
