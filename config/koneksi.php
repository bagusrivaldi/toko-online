<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "dbgemakom";

// Koneksi dan memilih database di server
$jp=mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa diakses. Periksa server!");
?>
