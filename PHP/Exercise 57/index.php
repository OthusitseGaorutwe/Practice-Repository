<?php
    $arr = [4,6,1,3,8,4,6];
    $arr_sub = [4,6,1,3,8,4,6];
    $max = null;
    for($i = 1; $i < count($arr); $i++){
        for ($j=0; $j < $i; $j++) { 
            if(($arr[$j] < $arr[$i]) && ($arr_sub[$j] + $arr[$i] > $arr_sub[$i])){
                 $arr_sub[$i] = $arr_sub[$j] + $arr[$i];
            }
        }
    }

    foreach($arr_sub as $sub){
        if(!$max){
            $max = $sub;
        }elseif($max && $sub > $max){
            $max = $sub;
        }
    }

    echo "Maximum Sum of Contiguous Subsequence is " . $max;
?>