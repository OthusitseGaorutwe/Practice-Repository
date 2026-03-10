<?php
    // sum of prime numbers below the following number
    $below_val = 100;    
    $sum_prime_values = 0;
    for ($i=1; $i < 100; $i++) { 
        
        // check if the value is a prime number
        $count = 0;
        for ($j=1; $j <= $i; $j++) { 
            
            if($i % $j == 0){
                $count++;
            }
        }

        // check if the value can go inside the current value is 1 and that value and nothing else in between
        if($count == 2){
            $sum_prime_values += $i;
        }
    }

    echo "Sum of prime numbers below ". $below_val . " is " . $sum_prime_values;
?>