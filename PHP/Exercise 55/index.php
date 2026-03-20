<?php
    $n1 = 10;
    $n2 = 90;
    $n3 = 70;
    $n4 = 20;
    $n5 = 60;
    $n6 = 30;

    $values = [
        $n1,
        $n2,
        $n3,
        $n4,
        $n5,
        $n6,
    ];

    rsort($values);

    echo implode(' ', $values);

?>