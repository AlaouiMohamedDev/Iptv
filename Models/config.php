<?php
$host = "127.0.0.1:3306";
$username = "u993329317_codata";
$password = "Codata2021";
$database = "u993329317_iptv";

$connection = mysqli_connect($host, $username, $password, $database);

if (!$connection) {
    echo "error" . mysqli_connect_error($connection);
}