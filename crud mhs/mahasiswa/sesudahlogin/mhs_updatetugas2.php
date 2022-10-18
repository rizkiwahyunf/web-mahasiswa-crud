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
    $sql = "UPDATE tugas SET content='$fileName', deskripsi='$deskripsi' WHERE id='$id_tugas'";
    if (mysqli_query($conn, $sql)){
        header("location: mhs_uploadtugas.php?id=$id_matkul");;
    }else{
        echo "Data error";
    }
    mysqli_close($conn);     
?>