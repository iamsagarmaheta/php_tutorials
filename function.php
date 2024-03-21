<?php
    $myName = "Is Lakhan";
    $result = addTwoNumbers(50,20);
    echo $result;
    
    function addTwoNumbers($number1, $number2)
    {
        //echo $number1 + $number2;
        return $number1 + $number2;
    }

    
?>
<h1>Hello</h1>

<?php
    $result = addTwoNumbers(
                15,
                20
            );
    echo $result; 
    echo $myName; 
?>

<?php
    // pass by ref.
    function increseNumberBy2(&$number)
    {
        $number += 2;
    }

    $age = 10;
    increseNumberBy2($age);
    echo "<br /> AGE : ".$age;
?>

<?php
    // default arguments
    function printNumbers($number1, $number2, $number3, $sep = ", ")
    {
        echo "<br /><br /> Nums : ".$number1 . $sep . $number2 . $sep . $number3;
    }
    
    printNumbers(10,20,30);
    printNumbers(10,20,30);
    printNumbers(10,20,30);
    printNumbers(10,20,30," - ");
    printNumbers(10,20,30," | ");
?>


<?php
    // default arguments
    function greetPerson($firstName, $lastName, $age)
    {
        echo "<br />Hello, ". $firstName. " " . $lastName. " Age : ". $age;
    }
    
    greetPerson("Sagar", "Maheta", 28);    
    greetPerson($lastName="Modi", $firstName="Kashak", 38);
?>

<?php
    $number = 20;

    function temp()
    {
        global $number;
        $number = 250;
        echo "<br/> In function ".$number;
    }

    temp();

    echo "<br/> out function ".$number;
    
?>

<?php
    function callme()
    {
        static $counter = 0;
        $counter++;
        echo "<br/>Function Called ".$counter." Times.";
    }

    callme();
    callme();
    callme();
    callme();
?>