<?php

    $number = 123;
    $count = 2;
    $count_prime_num = 0;
    
    while($count <= $number){
        $is_prime = true;
        for ($i=2; $i < $count; $i++) { 
            if($count % $i === 0){
                $is_prime = false;
            }
        }

        if($is_prime){
            $count_prime_num++;
        }

        $count++;
    }


?>