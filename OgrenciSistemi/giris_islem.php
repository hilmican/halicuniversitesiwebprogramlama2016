<?php

mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");

$sor = "select * from kullanicilar where kullanici_adi='".mysql_real_escape_string($_POST['kullanici_adi'])."' and sifre='".mysql_real_escape_string($_POST['sifre'])."'";
echo $sor;
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