<table>
<?php
for ($i=0; $i < sizeof($kayitlar); $i++) { 
	echo '<tr><td>'.$kayitlar[$i]->isim.'</td><td>'.$kayitlar[$i]->soyisim.'</td><td><a href="/ogrenci-sil?id='.$kayitlar[$i]->id.'">Sil</a></td></tr>';
}
?>
</table>