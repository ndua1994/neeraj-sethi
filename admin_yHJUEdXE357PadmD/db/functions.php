<?php


function prepStr($rec)
{
	global $conn;
	$rec=mysqli_real_escape_string($conn,$rec);
	return $rec;
}