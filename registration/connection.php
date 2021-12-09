<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass= "Google73T!";
$dbname = "userform";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect!");
}