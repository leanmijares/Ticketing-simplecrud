<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
date_default_timezone_set('Asia/Manila');

 $config['rewrite_short_tags'] = FALSE;
 $DB_host = "localhost";
 $DB_user = "databaseadmin";
 $DB_pass = "lamperouge";
 $DB_name = "ticketing";
 
try {
 $conn = mysqli_connect($DB_host, $DB_user, $DB_pass,$DB_name);
}

catch(Exception $error_message) {
    echo 'Failed to Connect' .$error_message->getMessage();
}

