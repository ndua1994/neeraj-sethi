<?php
session_start();
date_default_timezone_set('Asia/kolkata');
define('BASE_URL','http://localhost/neeraj-sethi/');
define('BASE_URL_IMG','http://localhost/neeraj-sethi/admin_yHJUEdXE357PadmD/');
$dbhost='localhost';
$dbusername='root';
$dbpassword='';
$dbname='db_neeraj_sethi';
$conn=mysqli_connect('localhost','root','','db_neeraj_sethi');
if(!$conn)
{
	die('Database Connection Failed '.mysqli_error());
}

