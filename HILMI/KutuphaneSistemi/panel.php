<?php

require_once("ayarlar.php");

if($_SESSION['kullanici'] == true)
{
	echo "<a href='kitaplar.php'>Kitaplar</a><br>";
	echo "<a href='kitaplarim.php'>Ödünç Alınan Kitaplar</a><br>";
}
else
{
	header('location:giris.php');
}
?>