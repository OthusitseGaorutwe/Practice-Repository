<?php
    if (version_compare(PHP_VERSION, '8.0.0') >= 0) {
        echo 'PHP version is at least 8.0.0, the version: ' . PHP_VERSION;
    }else if (version_compare(PHP_VERSION, '7.0.0') >= 0) {
        echo 'PHP version is at least 7.0.0, the version: ' . PHP_VERSION;
    }else if (version_compare(PHP_VERSION, '6.0.0') >= 0) {
        echo 'PHP version is at least 6.0.0, the version: ' . PHP_VERSION;
    }else {
        echo 'PHP version is not found';
    }
?>
