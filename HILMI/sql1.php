<html>
<body>
<?php
mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");

$isim = "Hilmi";
$rakam = 767612371763;
echo "$isim rakam da budur:$rakam<br><br>";

echo "Bana gönderilen isim:$_GET[isim], soyisim:$_GET[soyisim], numara:$_GET[numara]";
//veriyi gir.
mysql_query("insert into ogrenciler (isim,soyisim,numara,olusturma) values('$_GET[isim]','$_GET[soyisim]','$_GET[numara]','2016-10-19 12:12')");
/*
echo "GET İÇERİĞİ:<br>";
var_dump($_GET);

echo "GET İÇERİĞİ:<br>";
var_dump($_POST);

*/
?>
<form action="/HILMI/sql1.php" method="GET">
	İsim<input type="text" name="isim"><br>
	Soyisim<input type="text" name="soyisim"><br>
	Numara<input type="text" name="numara"><br>
	<input type="submit" name="gonder" value="Gönder">
</form>

</body>
</html>