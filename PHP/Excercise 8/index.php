<?php
// Define the URL to be parsed
$url = 'https://www.exercises.com/php-exercises/php-basic-exercises.php';

// Parse the URL and store its components in the $url variable
$url = parse_url($url);

// checking the url
// echo '<pre>'; print_r($url); exit;

// Display the scheme (protocol) of the parsed URL
echo 'Scheme: ' . $url['scheme'] . "<br>";

// Display the host (domain) of the parsed URL
echo 'Host: ' . $url['host'] . "<br>";

// Display the path of the parsed URL
echo 'Path: ' . $url['path'] . "<br>";
?>
