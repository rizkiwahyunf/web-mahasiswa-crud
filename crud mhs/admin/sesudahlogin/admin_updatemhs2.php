<?php
        include '../../koneksi.php';
        $uploadDir = '../../profile/mahasiswa/';

        $nrp = $_POST['nrp'];
        $namedepan = $_POST['namadepan'];
        $namebelakang = $_POST['namabelakang'];
        $jurusan = $_POST['jurusan'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $tahun = $_POST['tahun'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
        $fileName = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];
        $filePath = $uploadDir . $fileName;
        $result = move_uploaded_file($tmpName, $filePath);
        
        $id=$_GET['id'];

        $sql = "UPDATE mahasiswa SET nrp='$nrp',nama_depan='$namedepan',nama_belakang='$namebelakang',jurusan='$jurusan',tempat_lahir='$tempat',tanggal_lahir='$tanggal',umur='$umur',jenis_kelamin='$jk',nomorhp='$nohp',alamat='$alamat',tahun='$tahun',username='$username',pass='$password',email='$email',foto='$fileName' WHERE id=$id";
        if (mysqli_query($conn, $sql)){
            header("location: admin_detaidosen.php");
        }else{
            echo "Data error" .mysqli_error($sql);
        }
        mysqli_close($conn);     
?>