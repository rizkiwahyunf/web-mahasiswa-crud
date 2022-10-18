<?php
session_start();
if (!isset($_SESSION['user_is_logged_in']) || $_SESSION['user_is_logged_in'] !== true) {
    header('Location: mhs_login.php');
    exit;
}else{
    header('location:../sesudahlogin/mhs_halaman.php');
}
?>