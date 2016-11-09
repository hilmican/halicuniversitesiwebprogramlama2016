<html>
<body>
<?php
session_start();
if($_SESSION['kullanici'] == true)
{
	echo "Merhaba ".$_SESSION['kullanici_adi']."<br>";
	mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
	mysql_select_db("halicders")||die("db secemedim");
	//utf8 oldugunu belirt
	mysql_query("set names utf8");
	//veri post edildiyse
	if(!empty($_POST['ogrenci_id']))
	{

		$sor_notgiris = "insert into notlar (ders_id, ogrenci_id, notdeger) values(".$_POST['ders_id'].",".$_POST['ogrenci_id'].",".$_POST['not'].")";
		echo '<br><br>'.$sor_notgiris."<br><br>";
		if(mysql_query($sor_notgiris))
		{
			echo "Not girişi yapıldı<br>";	
		}
		else
		{
			echo mysql_error();
		}
	}
	
	?>
	<form action="/HILMI/OgrenciSistemi/notgiris.php" method="POST">
		Öğrenci
		<select name="ogrenci_id">
		<?php
		$sor_ogrenci 	= "select id, isim, soyisim from ogrenciler";
		$sorgu_ogrenci 	= mysql_query($sor_ogrenci);
		while($cevap_ogrenci = mysql_fetch_assoc($sorgu_ogrenci))
		{
			echo "<option value='".$cevap_ogrenci['id']."'>".$cevap_ogrenci['isim']." ".$cevap_ogrenci['soyisim']."</option>\r\n";
		}
		?>
		</select>
		<br>
		Ders

		<select name="ders_id">
		<?php
		$sor_ders 	= "select id, ders from dersler";
		$sorgu_ders 	= mysql_query($sor_ders);
		while($cevap_ders = mysql_fetch_assoc($sorgu_ders))
		{
			echo "<option value='".$cevap_ders['id']."'>".$cevap_ders['ders']."</option>";
		}
		?>
		</select>

		<br>
		Not<input type="text" name="not"><br>
		<input type="submit" name="gonder" value="Gönder">
	</form>

	</body>
	</html>
	<?php
}
else
{
	echo "Once giris yapin";
}
?>