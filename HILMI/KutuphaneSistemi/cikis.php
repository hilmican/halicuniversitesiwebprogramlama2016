<?php
	session_start();
	$_SESSION['kullanici'] = false;
	$_SESSION['email'] = "";
	header('location:giris.php');
?>