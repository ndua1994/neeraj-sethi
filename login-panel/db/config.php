<?php
session_start();
date_default_timezone_set('Asia/kolkata');
define('BASE_URL','https://neeraj-sethi.drehomes.ae/login-panel/');
define('BASE_URL_MAIN','https://neeraj-sethi.drehomes.ae/');
$dbhost='localhost';
$dbusername='drehomes_neeraj';
$dbpassword='E8CPoHb%@bmE';
$dbname='drehomes_neeraj_sethi';
$conn=mysqli_connect('localhost','drehomes_neeraj','E8CPoHb%@bmE','drehomes_neeraj_sethi');
if(!$conn)
{
	die('Database Connection Failed '.mysqli_error());
}

include "functions.php";
