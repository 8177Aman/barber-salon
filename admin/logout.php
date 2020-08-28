<?php 

session_start();
include '../function.php';
unset($_SESSIO['IS_LOGIN']);
redirect('login.php');

 ?>