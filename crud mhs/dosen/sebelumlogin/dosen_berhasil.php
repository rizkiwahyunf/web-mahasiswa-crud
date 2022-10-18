<?php
session_start();
if (!isset($_SESSION['user_is_logged_in']) || $_SESSION['user_is_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}else{
    header('location:../sesudahlogin/dosen_halaman.php');
}
?>