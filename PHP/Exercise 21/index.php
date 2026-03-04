<?php
    $number = 2;

    $greater_than = ($number > 30 ? "30" : ($number > 20 ? "20" : ($number > 10 ? "10" : "0")));

    echo $number . " is greater than " . $greater_than;
?>