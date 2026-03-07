<?php
    // Armstrong number of 3 digits
    $number = 372;
    $feedback = $number . ' is not an Armstrong number';

    if($number > 100 && $number < 1000){
        $last = $number % 10;
        $middle = (int)(($number % 100) / 10);
        $first = (int)($number / 100);
        
        $armstrong = $first**3 + $middle**3 + $last**3;

        if($armstrong === $number){
            $feedback = $number . ' is an Armstrong number';
        }
    }

    echo $feedback;
?>