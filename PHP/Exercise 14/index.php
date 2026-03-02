<?php
// Read all lines from the specified URL and store them in an array
$all_lines = file('https://www.exercises.com/');

// Iterate through each line in the array
foreach ($all_lines as $line_num => $line)
{
    echo "Line No. {$line_num}: " . htmlspecialchars($line) . "<br>";
}
?>
