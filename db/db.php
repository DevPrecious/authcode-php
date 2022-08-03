<?php


$localhost = 'localhost';
$username = 'root';
$password = '';
$dbname = 'dbhelper';

$conn = new mysqli($localhost, $username, $password, $dbname);

if($conn->connect_error){
    echo "error connecting to DB";
}