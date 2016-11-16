<?php
require_once("ayarlar.php");

$sor = "select kutuphane_odunc_kitaplar.id odunc_kitap_id, kutuphane_kitap.id kitap_id, kutuphane_kitap.isim kitap_isim, kutuphane_yazar.isim yazar_isim "
			." from kutuphane_kitap, kutuphane_yazar, kutuphane_odunc_kitaplar "
			." where kutuphane_kitap.yazar=kutuphane_yazar.id and kutuphane_odunc_kitaplar.kitap_id=kutuphane_kitap.id and kutuphane_kitap.yazar=kutuphane_yazar.id";
$sorgu = mysql_query($sor);
echo "<table border='1' style='width:100%;'>";
while($cevap = mysql_fetch_assoc($sorgu))
{
	echo "<tr>".
			"<td>$cevap[kitap_id]</td>".
			"<td>$cevap[kitap_isim]</td>".
			"<td>$cevap[yazar_isim]</td>".
			"<td><a href='iade.php?kitap_id=".$cevap['odunc_kitap_id']."'>İade Et</a></td>".
		 "</tr>";
}
echo "</table>";

?>