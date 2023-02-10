<?php
header("X-XSS-Protection: 0");header('X-XSS-Protection: 1; mode=block');header("X-Frame-Options: DENY");header('X-Content-Type-Options: nosniff');
require('header01.php'); 
require('main-content.php'); 
require('footer01.php'); 
?>