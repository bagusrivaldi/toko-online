<?php
session_start();
include "config/koneksi.php";

$rate=$_POST['rate'];
$id_plg=$_POST['id_plg'];
$id_produk=$_POST['id_produk'];

if($_SESSION['id_plg'] == true){

    mysql_query("INSERT INTO rating values ('$id_plg','$id_produk','$rate')");
    header('location:home');
} else {
    echo "<script>alert('please login first')</script>";
    header('location:login.php');
}

?>