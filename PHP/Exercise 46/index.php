<?php
    // get the list of heights in array
    $bulding_heights = [12,32,565,123,36,147,23];

    // sort the array
    rsort($bulding_heights);
    
    $results = '';
    $count = 0;
    foreach($bulding_heights as $bulding_height){
        if($count < 3){
            $results .= $bulding_height . ',';
        }
        $count++;
    }
    
    echo trim($results, ',');
