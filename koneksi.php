<?php
$server = "Mysql.idhostinger.com";
$username = "u693081856_panca";
$password = "setiyawandu0"; //kosongkan jika server anda tidak memakai password
$database = "u693081856_tugas"; 	
// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
