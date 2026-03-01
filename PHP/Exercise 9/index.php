<?php
// Define a text string
$text = 'PHP Tutorial';

$first_character = substr($text,0,1);
$remaining_characters = substr($text,1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><span style="color: red;"><?= $first_character; ?></span><?= $remaining_characters; ?></p>
</body>
</html>
