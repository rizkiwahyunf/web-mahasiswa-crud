<?php
session_start();
        include '../../koneksi.php';
        $tugas = $_POST['tugas'];
        $deskripsi = $_POST['desk'];
        $id = $_SESSION['id'];
        $sql2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM dosen WHERE id = '$id'"));
        $sql = "INSERT INTO daftartugas(namatugas,deskripsi,id_matkul) VALUES('$tugas','$deskripsi','$sql2[matkul]')";
        if (mysqli_query($conn, $sql)){
            header("location: dosen_halaman.php");
        }else{
            echo "Data error";
        }
        mysqli_close($conn);     
?>