<?php
$serverName = "localhost";
$dBUsername = "";
$dBPassword = "";
$dBName = "Login";

$conn = mysql_connect($serverName, $dBUsername, $dBPassword ,$dBName);

if(!$conn){
    die("Connection Failed: " . mysql_connect_error());
}
