<?php
// get last modification
$last_modified_time = getlastmod();
// Format the last modification time and print it
echo "Last modified: " . date("F d Y H:i:s.", $last_modified_time);
?>
