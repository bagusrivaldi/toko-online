<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['id_plg']);
header('location:login.php');
