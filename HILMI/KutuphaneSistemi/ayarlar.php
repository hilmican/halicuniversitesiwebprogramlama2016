<?php
mysql_connect("127.0.0.1","halicders","halicogrencisifre")||die("db ce");
mysql_select_db("halicders")||die("db secemedim");
//utf8 oldugunu belirt
mysql_query("set names utf8");
session_start();
?>
<a href="panel.php">Panel</a>||<a href="cikis.php">Güvenli Çıkış</a><br><br>