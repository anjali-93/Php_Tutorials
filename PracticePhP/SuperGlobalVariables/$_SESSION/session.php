<?php
session_start();
$_SESSION   ['user'] = 'JohnDoe';
$_SESSION   ['role'] = 'admin'; 
print_r($_SESSION);
echo '<br>';
echo 'Session variables are set.';  



?>