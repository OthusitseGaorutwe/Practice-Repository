<?php
    $number = 120;

    $bi = null;

    // loop through the number and devide by 2 each time up until it is 0
    while($number > 0){
        if($number % 2 == 0){
            $bi = 0 . $bi;
        }else{
            $bi = 1 . $bi;
        }

        $number = (int)($number / 2);
    }

    $length = strlen($bi);
    $first_pos = 1;
    $second_post = 4;

    $results = null;

    // compare values at each positions
    if($first_pos >= 0 && $second_post >= 0){
        if($first_pos < $length && $second_post < $length){
            if($bi[$first_pos] === $bi[$second_post]){
                $results = 'The bits are the same at a given postions';
            }else{
                $results = 'The bits are not the same';
            }
        }else{
            $results = 'The postion is greater than the length of the binary';
        }
    }else{
        $results = 'The postion cannot be negative';
    }

    // results
    echo "Binary: " . $bi;
    echo '<br>';
    echo "Postions: " . $first_pos . " and " . $second_post;
    echo '<br>';
    echo $results;
?>