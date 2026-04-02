<?php
    $values = "1 2 3 3 4 5 6 4 1 1";

    $numbers = explode(" ", $values);

    $new_array = [];
    $mode = [];

    foreach($numbers as $number){
        if(in_array($number, $new_array) && !in_array($number, $mode)){
            $mode[] = $number;
        }
        $new_array[] = $number;
    }

    sort($mode);

    echo "Frequent elements are " . implode(" ", $mode);

?>