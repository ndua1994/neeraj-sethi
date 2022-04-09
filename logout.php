<?php
include ('db/config.php');
unset($_SESSION['id']);
header('Location:'.BASE_URL.'login-panel');


?>