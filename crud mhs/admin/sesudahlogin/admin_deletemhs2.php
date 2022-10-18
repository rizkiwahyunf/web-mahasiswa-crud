<?php
        include '../../koneksi.php';

        $id=$_GET['id'];
        $sql="DELETE FROM mahasiswa WHERE id=$id";
                                
        if(mysqli_query($conn, $sql)){
            echo "<script>
                    alert('Data Mahasiswa Telah Terhapus');
                    window.location.href = 'admin_detailmhs.php';
                  </script>";
        }
        mysqli_close($conn);
?>
