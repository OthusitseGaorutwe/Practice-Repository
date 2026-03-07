<?php
    $var1 = 1;
    $var2 = 2;
    $temp;

    $temp = $var1;
    $var1 = $var2;
    $var2 = $temp;

    echo "Variable 1: " . $var1;
    echo "<br>";
    echo "Variable 2: " . $var2;
?>