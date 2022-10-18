<?php
session_start();
    include '../../koneksi.php';
    $uploadDir = '../../tugas/';

    $deskripsi = $_POST['desk'];
    $fileName = $_FILES['upload']['name'];
    $tmpName = $_FILES['upload']['tmp_name'];
    $fileSize = $_FILES['upload']['size'];
    $fileType = $_FILES['upload']['type'];
    $filePath = $uploadDir . $fileName;
    $result = move_uploaded_file($tmpName, $filePath);
    $id_tugas = $_POST['tugas'];
    $id_matkul = $_POST['matkul'];
    $id = $_SESSION['id'];
    $sql = "INSERT INTO tugas(content,deskripsi,id_mhs,id_dt,id_matkul) VALUES('$fileName','$deskripsi','$id','$id_tugas','$id_matkul')";
    if (mysqli_query($conn, $sql)){
        header("location: mhs_uploadtugas.php?id=$id_matkul");
    }else{
        echo "Data error";
    }
    mysqli_close($conn);     
?>