<?php
mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");

$sor = "select id,numara, isim, soyisim from ogrenciler";
$sorgu = mysql_query($sor);
echo "<table border='1' style='width:100%;'>";
while($cevap = mysql_fetch_assoc($sorgu))
{
	echo "<tr>".
			"<td>$cevap[id]</td>".
			"<td>$cevap[isim]</td>".
			"<td> $cevap[soyisim]</td>".
		 "</tr>";
}
echo "</table>";
?>