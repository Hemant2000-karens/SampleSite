<?php

$host = "localhost";    /* Host name */
$user = "u555485839_root";         /* User */
$password = "1234root";         /* Password */
$dbname = "u555485839_college";   /* Database name */

// Create connection
$con = mysqli_connect($host, $user, $password,$dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

