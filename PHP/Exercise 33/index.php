<?php
    $word = "one;two;three;five";

    $array_words = explode(';',$word);
    $values = '';
    foreach($array_words as $w){

        if($w == 'one'){
            $values .= 1;
        }elseif($w == 'two'){
            $values .= 2;
        }elseif($w == 'three'){
            $values .= 3;
        }elseif($w == 'four'){
            $values .= 4;
        }elseif($w == 'five'){
            $values .= 5;
        }elseif($w == 'six'){
            $values .= 6;
        }elseif($w == 'seven'){
            $values .= 7;
        }elseif($w == 'eight'){
            $values .= 8;
        }elseif($w == 'nine'){
            $values .= 9;
        }elseif($w == 'ten'){
            $values .= 0;
        }
    }

    echo $values;
?>