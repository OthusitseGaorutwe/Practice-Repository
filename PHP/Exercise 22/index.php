<?php
    // Constructing the full URL using $_SERVER variables
    $full_url = "$_SERVER[REQUEST_SCHEME]://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // Display the constructed full URL
    echo $full_url;
?>
