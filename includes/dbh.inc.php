<?php

$serverName = "localhost";
$dbUserName = "coma";
$dbPassword = "coma123";
$dbName = "login_system";

$conn = mysqli_connect($serverName,$dbUserName,$dbPassword,$dbName);

if(!$conn){
    die("Connection Failed : ".mysqli_connect_error());
}