<?php
    $number = "12345";
    $sum = 0;

    for ($i=0; $i < strlen($number); $i++) { 
        $sum += (int)$number[$i];
    }

    echo "Sum of the digits of a number: " . $sum;

?>