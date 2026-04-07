<?php
    $number_arr = [1,2,5,6,3,8,9,6];

    sort($number_arr);

    $small_to_large = implode($number_arr);
    
    rsort($number_arr);

    $large_to_small = implode($number_arr);

    $difference = $large_to_small - $small_to_large;

    echo "Difference between the largest integer and the smallest integer: \n" . $difference;
?>