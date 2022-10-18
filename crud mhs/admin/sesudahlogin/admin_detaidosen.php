<?php
    session_start();
    if (!isset($_SESSION['user_is_logged_in']) || $_SESSION['user_is_logged_in'] !== true) {
    header('location: ../sebelumlogin/admin_login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!--js-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--css eksternal-->
    <link rel="stylesheet" href="css/admin_tambahdosen.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>E-Leaning Website</title>
</head>
<body>
    <!--------------- NAVBAR START --------------->
    <section id="navbars">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">E-Learning</a>
        </nav>
    </section>
    <!--------------- NAVBAR END --------------->
    <?php
        include '../../koneksi.php';
        $id=$_SESSION['id'];
        $sql="SELECT * FROM admin WHERE id=".$id;
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            while($row=mysqli_fetch_array($result)){
    ?>
    <!--------------- SIDEBAR START --------------->
    <section id="sidebar">
        <div class="container">
            <div class="side">
                <div class="profile text-center">
                    <?php echo "<img src='../../profile/admin/". $row['foto']."' class='card-img-top'>";
                          echo "<br><br>" .$row['nama_depan']. "&nbsp".$row['nama_belakang'];
                    ?>
                    <a href="">As Admin</a>
                </div>
                <div class="icon">
                    <div class="accordion" id="accordionExample">
                        <div class="one">
                            <h2 class="mb-0">
                            <i class="fas fa-user-plus"></i><button class="btn btn-link text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Tambah Data</button>
                            </h2>
                            <div id="collapseOne" class="collapse" data-parent="#accordionExample">
                                <a href="admin_detaidosen.php">Dosen</a> 
                                <a href="admin_detailmhs.php">Mahassiswa</a> 
                        </div>
                        <div class="two">
                            <h2 class="mb-0">
                            <i class="fas fa-user-edit"></i><button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Update Data</button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                               <a href="admin_detaidosen.php">Dosen</a> 
                               <a href="admin_detailmhs.php">Mahassiswa</a> 
                            </div>
                        </div>
                        <div class="three">
                            <h2 class="mb-0">
                            <i class="fas fa-eraser"></i><button class="btn btn-link text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Hapus Data</button>
                            </h2>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <a href="admin_detaidosen.php">Dosen</a> 
                                <a href="admin_detailmhs.php">Mahassiswa</a> 
                            </div>
                        </div>
                        <div class="log">
                            <i class="fas fa-arrow-circle-left"></i><a href="../../logout.php" >Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
            }
        }
        mysqli_close($conn);
    ?>
    <!--------------- SIDEBAR END --------------->   
    <!--------------- TAMBAH DOSEN START --------------->
    <?php
        include '../../koneksi.php';

        $sql = "SELECT * FROM dosen";
        $result = mysqli_query($conn, $sql);
    ?>
    <section id="dosen">
        <div class="container">
            <form action="admin_tambahdosen.php">
                <div class="card text-center">
                    <div class="card-header">
                        <h3 class="display-5">Daftar Dosen</h3>
                    </div>
                    <div class=" card card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col ">NIP</th>
                                    <th scope="col ">Nama</th>
                                    <th scope="col ">Matkul</th>
                                    <th scope="col ">Alamat</th>
                                    <th scope="col ">Username</th>
                                    <th scope="col ">Action</th>
                                </tr>
                            </thead>
                            <?php
                                if (mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "<tr style='border-bottom:2px solid #302b63'>";
                                        echo "<th style='font-weight:400'>" . $row['nip']. "</th>";
                                        echo "<th style='font-weight:400'>" . $row['nama_depan']. "&nbsp".$row['nama_belakang']. "</th>";
                                        $sql2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM matakuliah WHERE id_matakuliah = '$row[matkul]'"));
                                        echo "<th style='font-weight:400'>".$sql2['matkul']. "</th>";
                                        echo "<th style='font-weight:400'>".$row['alamat']. "</th>";
                                        echo "<th style='font-weight:400'>".$row['username']. "</th>";
                                        echo "<th><a href='admin_dosenprofil.php?id=$row[id]'><i class='fas fa-info-circle' style='color:green;'></i></a>&nbsp 
                                        <a href='admin_updatedosen.php?id=$row[id]'><i class='fas fa-pencil-alt'></i></a> &nbsp 
                                        <a href='admin_deletedosen2.php?id=$row[id]'><i class='fas fa-trash-alt'style='color:red;'></i></a></th>";
                                        echo "</tr>";
                                    }
                                }else{
                                    ?>
                                    
                                    <?php
                                }
                                mysqli_close($conn);
                            ?>
                        </table>
                        <button type="submit" class="btn btn-primary" >Tambah Data Dosen</button>
                    </div>
                </div>       
            </div>
            </form>
        </div>
    </section>
    <!--------------- TAMBAH DOSEN END --------------->
        <!--------------- HOME START --------------->
        <section id="omah">
        <div class="gambar">
                <img src="../../pict/images/wave2.png" alt="">
        </div>
    </section>
    <!--------------- HOME END --------------->
    
</body>
</html>