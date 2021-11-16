<?php
include  "/config/koneksi.php";

$email=$_POST['email'];
$telp=$_POST['telp'];
$password=$_POST['password'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];

mysql_query("INSERT INTO pelanggan VALUES ('','$password',".time().",'$nama','$alamat','$telp','$kota','$email')");
header('location:login.php');
?>