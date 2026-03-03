<?php
// Get the base name of the current PHP script file
$file = basename($_SERVER['PHP_SELF']);

// Count the number of lines in the current PHP script file
$no_of_lines = count(file($file)); 

// Display the result indicating the number of lines in the file
echo "There are $no_of_lines lines";
?>
