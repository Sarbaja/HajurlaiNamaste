<?php

    $hostname= 'localhost';
    $username= 'root';
    $password= '';
    $database= 'hajurlainamaste';

    $connection = mysqli_connect($hostname, $username, $password, $database) or exit('Cannot connect to database');

    if($connection){
        //echo "Connected to database ". $database;
    }
?>