<?php
    $list1 = [1,2,3,4,5];
    $list2 = [6,7,8,9,10];

    if(count($list1) === count($list2)){
        for ($i=0; $i < count($list1); $i++) { 
            echo $list1[$i] . ' * ' . $list2[$i] . ' = ' . ($list1[$i] * $list2[$i]);
            echo '<br>';
        }
    }
?>