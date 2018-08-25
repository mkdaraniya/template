<?php

$dbname = 'template_db';
$dbuser = 'root';
$dbpass = 'root';
$dbhost = 'localhost';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}