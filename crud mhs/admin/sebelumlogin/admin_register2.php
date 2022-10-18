<?php
        include '../../koneksi.php';
        $uploadDir = '../../profile/admin/';

        $namedepan = $_POST['namadepan'];
        $namebelakang = $_POST['namabelakang'];
        $email = $_POST['email'];
        $password = md5($_POST['pass']);
        $username = $_POST['username'];
        $fileName = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];
        $filePath = $uploadDir . $fileName;
        $result = move_uploaded_file($tmpName, $filePath);
    
        $sql= "INSERT INTO admin(nama_depan,nama_belakang,username,pass,email,foto) VALUES('$namedepan','$namebelakang','$username','$password','$email','$fileName')";
        if (mysqli_query($conn, $sql)){
            header("location: admin_login.php");;
        }else{
            mysql_error();
            echo "Data error" .mysqli_error($sql);
        }
        mysqli_close($conn);     
?>