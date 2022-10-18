<?php
        include '../../koneksi.php';
        $matkul = $_POST['matkul'];
        
        $sql = "INSERT INTO matakuliah(matkul) VALUES('$matkul')";
        if (mysqli_query($conn, $sql)){
            header("location: admin_detailmhs.php");
        }else{
            echo "Data error" .mysqli_error($sql);
        }
        mysqli_close($conn);     
?>