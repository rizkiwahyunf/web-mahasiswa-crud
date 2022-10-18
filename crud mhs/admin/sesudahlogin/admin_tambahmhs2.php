<?php
        include '../../koneksi.php';
        $uploadDir = '../../profile/mahasiswa/';

        $nrp = $_POST['nrp'];
        $namedepan = $_POST['namadepan'];
        $namebelakang = $_POST['namabelakang'];
        $jurusan = $_POST['jurusan'];
        $tahun = $_POST['tahun'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
        $fileName = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];
        $filePath = $uploadDir . $fileName;
        $result = move_uploaded_file($tmpName, $filePath);
        
        $sql = "INSERT INTO mahasiswa(nrp,nama_depan,nama_belakang,jurusan,tahun,tempat_lahir,tanggal_lahir,umur,jenis_kelamin,nomorhp,alamat,username,pass,email,foto) VALUES('$nrp','$namedepan','$namebelakang','$jurusan','$tahun','$tempat','$tanggal','$umur','$jk','$nohp','$alamat','$username','$password','$email','$fileName')";
        if (mysqli_query($conn, $sql)){
            header("location: admin_detailmhs.php");
        }else{
            echo "Data error" .mysqli_error($sql);
        }
        mysqli_close($conn);     
?>