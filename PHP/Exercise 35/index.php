<?php
    $input = array(1,1,2,2,3,4,5,5);

    $output = [];

    foreach($input as $value){
        if(!in_array($value, $output)){
            $output[] = $value;
        }
    }

    print_r($output);
?>