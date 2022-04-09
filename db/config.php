<?php
session_start();
date_default_timezone_set('Asia/kolkata');
define('BASE_URL','https://neeraj-sethi.drehomes.ae/');
define('BASE_URL_IMG','https://neeraj-sethi.drehomes.ae/admin_yHJUEdXE357PadmD/');
$dbhost='localhost';
$dbusername='drehomes_neeraj';
$dbpassword='E8CPoHb%@bmE';
$dbname='db_neeraj_sethi';
$conn=mysqli_connect('localhost','drehomes_neeraj','E8CPoHb%@bmE',
	'drehomes_neeraj_sethi');
if(!$conn)
{
	die('Database Connection Failed '.mysqli_error());
}

