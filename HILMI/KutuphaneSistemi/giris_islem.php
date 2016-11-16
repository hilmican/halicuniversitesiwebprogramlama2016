<?php

mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");

$sor = "select * from kutuphane_kullanici where email='".mysql_real_escape_string($_POST['email'])."' and sifre='".mysql_real_escape_string($_POST['sifre'])."'";
$sorgu = mysql_query($sor);
echo "<br>".$sor."<br>";
if($cevap = mysql_fetch_assoc($sorgu))
{
	session_start();
	$_SESSION['kullanici'] = true;
	$_SESSION['email'] = $cevap['email'];
	echo "<br>Basarili giris<br>";
	header('location:panel.php');
}
else
{
	session_start();
	$_SESSION['kullanici'] = false;
	echo "<br>Hatali giris<br>";
	header('location:giris.php?islem=hata');
}

?>