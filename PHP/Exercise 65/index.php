<?php
    $total_prime = 25;
    $prime_count = 0;
    $total = 0;
    $value = 2;

    while(true){
        $count = 0;
        for ($i=1; $i <= $value; $i++) { 
            if($value % $i == 0){
                $count++;
            }
        }

        if($count == 2){
            $total += $value;
            $prime_count++;
        }
        
        if($prime_count === $total_prime){
            break;
        }

        $value++;
    }

    echo "Sum of first {$total_prime} prime numbers: " . $total;
?>