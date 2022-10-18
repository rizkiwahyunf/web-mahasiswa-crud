<?php
session_start();
    include '../../koneksi.php';
    $nilai = $_POST['nilai'];
    $id_matkul = $_POST['matkul'];
    $id_tugas = $_POST['tugas'];
    $id = $_SESSION['id'];
    $sql = "UPDATE tugas SET nilai='$nilai' WHERE id = '$id_tugas'";
    if (mysqli_query($conn, $sql)){
        header("location: dosen_uploadnilai.php?id=$id_matkul");
    }else{
        echo "Data error";
    }
    mysqli_close($conn);     
?>