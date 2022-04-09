<?php

if(empty($_SESSION['id']))
{
	header('Location:'.BASE_URL.'login-panel');
}

?>