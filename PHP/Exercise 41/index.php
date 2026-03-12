<?php
    echo '<table>';
    for ($i=1; $i <= 6; $i++) { 
        echo '<tr>';
        for ($j=1; $j <= 6; $j++) {
            echo '<td>' . ($i * $j) . '</td>'; 
        }
        echo '</tr>';
    }
    echo '</table>';
?>