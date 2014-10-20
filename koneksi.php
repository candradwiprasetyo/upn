<?php
	$NAMA_SERVER = "";
	//$USERNAME = "surfsof1_soegi";
	//$PASSWORD = "kosong";
	$USERNAME = "root";
	$PASSWORD = "";
	$id_mysql = mysql_connect($NAMA_SERVER,$USERNAME,$PASSWORD);
	if(!$id_mysql) die("Koneksi gagal");
	//@mysql_select_db("surfsof1_psb",$id_mysql);
	@mysql_select_db("upndaftar",$id_mysql);
?>