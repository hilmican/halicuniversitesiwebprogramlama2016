<?php

mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");

$sor = "select * from kullanicilar where kullanici_adi='".mysql_real_escape_string($_POST['isim'])."' and sifre='".mysql_real_escape_string($_POST['sifre'])."'";
$sorgu = mysql_query($sor);
echo "<br>".$sor."<br>";
if($cevap = mysql_fetch_assoc($sorgu))
{
	session_start();
	$_SESSION['kullanici'] = true;
	$_SESSION['kullanici_adi'] = $cevap['kullanici_adi'];
	echo "<br>Basarili giris<br>";
	echo "<br><a href='kayit.php'>Kayıt sayfasına gitmek için tıklayın.</a><br>";
	var_dump($cevap);
}
else
{
	session_start();
	$_SESSION['kullanici'] = false;
	echo "<br>Hatali giris<br>";
}

?>