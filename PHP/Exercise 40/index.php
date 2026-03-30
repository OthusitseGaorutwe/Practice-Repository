<?php
    function calculate_mod($value, $mod) {
        
        if($mod <= 0){
            return;
        }

        $absuluteValue = abs($value);
        $absuluteMod = abs($mod);

        while($absuluteValue >= $absuluteMod){
            $absuluteValue -= $absuluteMod;
        }

        return ($value < 0 ? $absuluteValue * -1 : $absuluteValue);
    }

    echo "The mod is " . calculate_mod(12,5);
?>