<?php

$isim 		= "Hilmi";
$soyisim 	= "BAYCAN";
$adres		= 'Burasi adresim';
$birlesik	= $isim.$soyisim;
$birlesik2	= $isim.' '.$soyisim;
$birlesik3	= $isim." ".$soyisim;

$birlesik4	= "ahmet 'naber' dedi<br>";
echo $birlesik4;
$birlesik5	= 'ahmet "naber" dedi<br>';
echo $birlesik5;

$birlesik6	= "ahmet \"naber\" dedi<br>";
echo $birlesik6;

$birlesik7	= "adim: $isim<br>";
echo $birlesik7;

$birlesik8	= 'adim: $isim<br>';
echo $birlesik8;

$cevap = Array('isim'=>'ali', 'soyisim'=>'pak', 'not'=>50);

echo "$cevap[isim]<br>";
echo $cevap['isim']."<br>";

?>