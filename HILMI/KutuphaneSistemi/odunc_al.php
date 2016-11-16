<?php

require_once("ayarlar.php");

$sor = "insert into kutuphane_odunc_kitaplar (kullanici_id, kitap_id, tarih) values (1,".mysql_real_escape_string($_GET['kitap_id']).",now())";
if($sorgu= mysql_query($sor))
{
	echo "Tebrikler, kitabı ödünç aldınız.";
}
else
{
	echo "Kitap ödünç alırken bir sorunla karşılaştınız.";
}

?>