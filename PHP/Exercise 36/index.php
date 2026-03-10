<?php
    $another_str = "Another string";
    $occurs_str = " string";

    $get_length = strlen($occurs_str);
    $get_another_str_length = strlen($another_str);

    $results = "The string does not occur at another given string";
    if($get_another_str_length > $get_length){
        
        $get_start_index = $get_another_str_length - $get_length;


        $last_characters = substr($another_str, $get_start_index, $get_length);

        if($last_characters === $occurs_str){
            $results = "The string occurs at another given string";
        }
    }

    echo $results;
?>