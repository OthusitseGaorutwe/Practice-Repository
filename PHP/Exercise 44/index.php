<?php

$nums = array(0, 1, 2, 3, 4, 5, 6);

function pair_equa($nums, $value) {
    $results = '';
    for ($i=0; $i < count($nums); $i++) {     
        for ($j=$i+1; $j < count($nums); $j++) { 
            if($nums[$i] + $nums[$j] == $value){
                $results .= $nums[$i] . ', ' . $nums[$j] . "<br>";
            }
        }
    }

    echo $results;
}

pair_equa($nums, 6);

?>
