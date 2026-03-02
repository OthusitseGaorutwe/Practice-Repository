<?php
// Get the current file name using basename and $_SERVER['PHP_SELF']
$current_file_name = basename($_SERVER['PHP_SELF']);

// Get the last modification time of the current file
$file_last_modified = filemtime($current_file_name);

// Display the last modified time in a human-readable format
echo "Last modified: " . date("l, dS F, Y, h:ia", $file_last_modified);
?>