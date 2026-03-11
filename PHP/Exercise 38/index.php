<?php
    // get email
    $email = 'testing@test.com';

    // check if email is valid
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'The email is valid';
    }else{
        echo "The email is invalid";
    }
?>