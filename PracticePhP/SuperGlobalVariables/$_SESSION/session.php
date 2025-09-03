<?php
session_start();
$_SESSION   ['user'] = 'JohnDoe';
$_SESSION   ['role'] = 'admin'; 
echo 'Session variables are set.';  


?>