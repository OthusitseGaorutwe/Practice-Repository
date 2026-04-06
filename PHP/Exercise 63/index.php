<?php
    $string = "PHP is popular than Python";

    $string_arr = explode(" ", $string);
    $new_string_arr = [];

    foreach($string_arr as $str){
        if($str == "PHP"){
            $new_string_arr[] = "Python";
        }else if($str == "Python"){
            $new_string_arr[] = "PHP";
        }else{
            $new_string_arr[] = $str;
        }
    }

    echo implode(" ", $new_string_arr);
?>