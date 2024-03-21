<?php
    $color_list = ["Red", "Green", "Yellow", "!White"];
    foreach($color_list as $singleColor)
    {
        echo "<br />".$singleColor;
    }

    $student_list = [
        'Sagar' => 'MCA',
        'Kashak' => '7th fail',
        "Palak" => "M.Com 80% Topper."
    ];

    foreach($student_list as $student_key => $student_val)
    {
        echo "<br />"."$student_key => $student_val";
    }
?>