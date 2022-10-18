<?php
        include '../../koneksi.php';
        $uploadDir = '../../profile/dosen/';

        $nip = $_POST['nip'];
        $namedepan = $_POST['namadepan'];
        $namebelakang = $_POST['namabelakang'];
        $matkul = $_POST['matkul'];
        $tempat = $_POST['tempat'];
        $tanggal = $_POST['tanggal'];
        $umur = $_POST['umur'];
        $jk = $_POST['jk'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];
        $studi = $_POST['studi'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['pass']);
        $fileName = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];
        $filePath = $uploadDir . $fileName;
        $result = move_uploaded_file($tmpName, $filePath);

        $sql1 = "INSERT INTO dosen(nip,nama_depan,nama_belakang,matkul,tempat_lahir,tanggal_lahir,umur,jenis_kelamin,nomorhp,alamat,study_terakhir,username,pass,email,foto) VALUES('$nip','$namedepan','$namebelakang','$matkul','$tempat','$tanggal','$umur','$jk','$nohp','$alamat','$studi','$username','$password','$email','$fileName')";

        $sql2 = "SELECT * FROM matakuliah WHERE matkul=".$matkul;
        $result = mysqli_query($conn,$sql2);
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
                $matkul2 = $row['matkul'];
                if($matkul == $matkul2){
                    $sql3 = "INSERT INTO matakuliah(nama_depan,nama_belakang,nip) VALUES('$namedepan','$namebelakang','$nip')";
                }
            }
        }
        if (mysqli_query($conn, $sql1)){
            header("location: admin_detaidosen.php");
        }else{
            echo "Data error" .mysqli_error($sql1);
        }
        mysqli_close($conn);     
?>