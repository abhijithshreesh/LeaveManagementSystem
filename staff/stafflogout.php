<?php
session_start();
	unset($_SESSION['username']);
	session_destroy();
session_unset();
$welcome="staff_login.php";
header('Location: '.$welcome);
?>