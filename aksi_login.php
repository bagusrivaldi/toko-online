<?php
session_start();
include  "/config/koneksi.php";

$email=$_POST['email'];
$password=$_POST['password'];

$cekuser=mysql_query("select * from pelanggan where email='$email' AND password='$password' ");
$cek=mysql_num_rows($cekuser);
$user=mysql_fetch_array($cekuser);

if($cek==1){
$_SESSION['email']=$email;
$_SESSION['id_plg']=$user['id_plg'];
header('location:home');
 }
 
else{header('location:login.php');}


?>