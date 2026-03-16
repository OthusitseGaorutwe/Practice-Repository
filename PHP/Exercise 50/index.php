<?php

    $borrowing = 100000; // load amount
    $interest = 0.05; // 5% interest
    $months = 5;
    $amount = $borrowing;
    $interest_amount = 0;

    while($months > 0){
        $interest_amount = round($amount * $interest, -3);

        $amount += $interest_amount;

        $months--;
    }

    echo "Amount of debt: " . $amount + $interest_amount;
?>