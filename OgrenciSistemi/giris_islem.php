<?php

if($_POST['isim'] == "hilmi" && $_POST['sifre']=="1234")
{
	session_start();
	$_SESSION['kullanici'] = true;
	echo "Basarili giris";
}
else
{
	session_start();
	$_SESSION['kullanici'] = false;
	echo "Hatali giris";
}

?>