<?php
mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");

$sor = "select d.ders, o.isim, o.soyisim, notlar.notdeger from notlar, ogrenciler o, dersler d where notlar.ders_id=d.id and notlar.ogrenci_id=o.id";
$sorgu = mysql_query($sor);
echo "<table border='1' style='width:100%;'>";
while($cevap = mysql_fetch_assoc($sorgu))
{
	echo "<tr>".
			"<td>$cevap[id]</td>".
			"<td>$cevap[ders]</td>".
			"<td>$cevap[isim] $cevap[soyisim]</td>".
			"<td>$cevap[notdeger]</td>".
		 "</tr>";
}
echo "</table>";

?>