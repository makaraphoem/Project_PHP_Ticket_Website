<?php 
session_start();
unset($_COOKIE['email']); 
unset($_COOKIE['password']); 
unset($_COOKIE['username']); 
unset($_COOKIE['role_id']); 
unset($_COOKIE['id']); 
setcookie('email', null, -1, '/');
setcookie('password', null, -1, '/');
setcookie('username', null, -1, '/');
setcookie('role_id', null, -1, '/');
setcookie('id', null, -1, '/');
header('location:/');
?>