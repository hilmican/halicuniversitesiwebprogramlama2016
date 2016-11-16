<?php
require_once("ayarlar.php");

$sor = "select kutuphane_kitap.id kitap_id, kutuphane_kitap.isim kitap_isim, kutuphane_yazar.isim yazar_isim from kutuphane_kitap, kutuphane_yazar where kutuphane_kitap.yazar=kutuphane_yazar.id";
$sorgu = mysql_query($sor);
echo "<table border='1' style='width:100%;'>";
while($cevap = mysql_fetch_assoc($sorgu))
{
	echo "<tr>".
			"<td>$cevap[kitap_id]</td>".
			"<td>$cevap[kitap_isim]</td>".
			"<td>$cevap[yazar_isim]</td>".
		 "</tr>";
}
echo "</table>";

?>