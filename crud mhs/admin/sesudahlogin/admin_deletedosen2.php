<?php
        include '../../koneksi.php';

        $id=$_GET['id'];
        $sql="DELETE FROM dosen WHERE id=$id";
                                
        if(mysqli_query($conn, $sql)){
            echo "<script>
                    alert('Data Dosen Telah Terhapus');
                    window.location.href = 'admin_detaidosen.php';
                  </script>";
        }
        mysqli_close($conn);
?>
