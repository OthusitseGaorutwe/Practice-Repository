<?php
    $number = 100;
    $prime_numbers_arr = [];

    if($number >= 4 && $number <= 50000){
        for ($i=1; $i < $number; $i++) { 
            $count = 0;
            for ($j=1; $j <= $i; $j++) { 
                if($i % $j === 0){
                    $count++;
                }
            }
            if($count === 2){
                $prime_numbers_arr[] = $i;
            }
        }

        $combinations = 0;

        for ($k=0; $k < count($prime_numbers_arr); $k++) { 
            for ($l=$k+1; $l < count($prime_numbers_arr); $l++) { 
                if($prime_numbers_arr[$k] + $prime_numbers_arr[$l] === $number){
                    echo $prime_numbers_arr[$k] . " + " . $prime_numbers_arr[$l];
                    echo "<br>";
                    $combinations++;
                }
            }
        }

        echo "<br>";
        echo "Number of combinations: " . $combinations;

    }else{
        echo "The value does not fall within the required bounds";
    }
?>