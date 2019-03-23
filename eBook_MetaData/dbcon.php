<?php

$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "db3";

$connect = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);

if(!connection) {
    die("Not connected: " . mysqli_connect_error());
}
