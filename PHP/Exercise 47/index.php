<?php
    digits_sum(12,12);

    function digits_sum($val1, $val2) {
        // calculate sum
        $sum = $val1 + $val2;

        // digits
        echo "Digits of sum is " . strlen($sum);
    }

?>