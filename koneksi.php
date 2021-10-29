<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "validasi";
$con = @mysqli_connect($host, $username, $password, $database);

if (!$con) {
    echo "Error:" . mysqli_connect_error();
    exit();
}