<?php
require_once("ayarlar.php");

$sor = "delete from kutuphane_odunc_kitaplar where id=".mysql_real_escape_string($_GET['kitap_id']);
if($sorgu = mysql_query($sor))
{
	echo "Kitabı geri verdiniz.";
}
else
{
	echo "Kitap iade işleminde bir hata oluştu<br>";
	echo mysql_error();
}
?>