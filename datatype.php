<?php
    
    $isSaved = false;
    echo "<br/> Bool : ".$isSaved;

    echo "<br /> Size : ". PHP_INT_SIZE;

    $number_list = [5,20,17,19,24,30];
    $number_list[1] = 28.30;
    echo "<br /> Numbers : ". $number_list[0];
    echo "<br /> Numbers : ". $number_list[1];

    // associative array
    $student_data = ["sagar" => ["Maheta Sagar", "MCA", "Software Developer"], 
                    "Kashak" => 5, 
                    "palak" => "Three" ];

    $student_data["Kashak"] = "Kashak Modi";

    echo "<br /> Sagar : ". $student_data["sagar"][0];
    echo "<br /> Palak : ". $student_data["palak"];
    echo "<br /> Kashak : ". $student_data["Kashak"];

    $balance = +012;
    echo "<br /> Octal To Decimal : ". $balance;

    $balance = 0xAA;
    echo "<br /> Hex To Decimal : ". $balance;

    $age = 10;
    echo "<br /> is_int() : ". is_int($age);
    echo "<br />";
    if(is_int($age))
    {
        echo "Number" . $age;
    }
    else
    {
        echo "String" . $age;
    }

    $big_num = 10e5;
    echo "<br /> big_num : ". $big_num;

    echo "<br />";
    $name = "John";
    echo "Hello $name";
    echo "Hello {$name}";
    echo "<br> 0 : ". $name[0];
    echo "<br> strlen : ". strlen($name);

    $name = NULL;
    unset($name);

    $number = "10";
    $int_num = (int) $number;
    echo "<br/> Type : ". var_dump($int_num);
    echo "<br/> Type(number) : ". var_dump($number);

    $qty = 20;
    if($qty == '20') {
        echo '<br/> <br/> 1. Equal';
    }
    if($qty === '20') {
        echo '<br/> <br/> Equal';
    }
    else
    {
        echo '<br/> <br/> Not Equal';
    }
?>