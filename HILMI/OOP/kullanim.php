<?php

require_once("ders.class.php");

$ders = new Ders();

$ders->yaz("Merhaba öğrenci, ders saati:".$ders->getDersSaat());

?>