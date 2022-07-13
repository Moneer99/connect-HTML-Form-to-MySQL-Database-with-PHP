<?php
$serverName = "localhost";
$userName = "root";
$pass="password";
// database name
$db_name = "try_db";

$conn = mysqli_connect($serverName,$userName,$pass,$db_name);

if(!$conn){
    echo "Connection failed!";
    exit();
}