<?php
    $sentence = "Thank you for your comment and your participation";

    if(strlen($sentence) <= 1000){
        $words = explode(" ", $sentence);
        $frequent = [];
        $frequent_term = "";
        $lenth = 0;
        $long_word = null;

        foreach($words as $word){
            if(strlen($word) <= 32){
                if(!in_array($word, $frequent)){
                    $frequent[] = $word;
                }else{
                    $frequent_term = $word;
                }

                if(strlen($word) > $lenth){
                    $lenth = strlen($word);
                    $long_word = $word;
                }
            }
        }

        echo $frequent_term . " " . $long_word;
    }else{
        echo "The letters in the text are too long!";
    }

?>