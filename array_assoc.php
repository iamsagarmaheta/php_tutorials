<?php
    $studentData = [];
    $studentData["Sagar"] = "MCA - Mumbai University";
    $studentData["Kashak"] = "BCA - Saurashtra University";

    echo "<pre>";
    print_r($studentData);
    echo "</pre>";

    echo $studentData["Sagar"];
    echo "<br/>".$studentData["Kashak"];
?>