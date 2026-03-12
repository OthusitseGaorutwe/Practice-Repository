<?php
    $string = "abcdea";
    $str_len = strlen($string);

    $character = null;

    for ($i=0; $i < $str_len; $i++) { 
        $character = $string[$i];
        $repeating = false;
        for ($j=0; $j < $str_len; $j++) { 
            if($i !== $j){
                if($string[$i] === $string[$j]){
                    $character = null;
                    $repeating = true;
                }
            }
        }
        if(!$repeating){
            break;
        }
    }

    if($character){
        echo "The first non repeating character is " . $character;
    }else{
        echo "There is no non-repeating character";
    }
?>