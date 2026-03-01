<?php
// echo "<pre>"; print_r($_SERVER); exit;
    if($_SERVER['REQUEST_SCHEME']){
        echo "Called fron HTTPS";
    }else{
        echo "Called fron HTTP";
    }

?>