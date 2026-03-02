<?php
    // Specify an email address
    $email = "mail@example.com";

    // Use the filter_var function with FILTER_VALIDATE_EMAIL to check if the email is valid
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
        // If the email is valid, print a message indicating it is valid
        echo "Valid";
    } else {
        // If the email is invalid, print a message indicating it is invalid
        echo "Invalid";
    }
?>
