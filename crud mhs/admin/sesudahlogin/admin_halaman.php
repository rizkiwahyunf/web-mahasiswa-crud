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
    <link rel="stylesheet" href="css/admin_halaman.css">
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
    <!--------------- SIDEBAR END --------------->
    
    
    <!--------------- PROFIL ADMIN START --------------->
    <section id="profil">
        <div class="user-profile">
            <div class="card shadow-lg border-0 mt-4">
                <div class="card-pertama card-body">
                    <h4 class="card-title text-center">Profile dari <?php echo $row['nama_depan']. "&nbsp".$row['nama_belakang'];?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <?php echo "<img src='../../profile/admin/". $row['foto']."' class='card-img-top'>"?>
                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">NIP <span style="margin-left:150px"><?php echo $row['nip']?></span></li>
                                <li class="list-group-item">Nama <span style="margin-left:120px"><?php echo $row['nama_depan']. "&nbsp".$row['nama_belakang']?></span></li>
                                <li class="list-group-item">TTL <span style="margin-left:85px"><?php echo $row['tempat_lahir']. ", &nbsp".$row['tanggal_lahir']?></span></li>
                                <li class="list-group-item">Umur <span style="margin-left:125px"><?php echo $row['umur']?></span></li>
                                <li class="list-group-item">Agama <span style="margin-left:85px"><?php echo $row['agama']?></span></li>
                                <li class="list-group-item">No. Hp <span style="margin-left:115px"><?php echo $row['nomorhp']?></span></li>
                                <li class="list-group-item">Alamat <span style="margin-left:85px"><?php echo $row['alamat']?></span></li>
                                <li class="list-group-item">Username <span style="margin-left:85px"><?php echo $row['username']?></span></li>
                                <li class="list-group-item">E-mail <span style="margin-left:115px"><?php echo $row['email']?></span></li>
                                <button type="submit" class="btn btn-primary">Update Profile</button>
                            </ul>
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
    <!--------------- PROFIL ADMIN END --------------->
    <!--------------- HOME START --------------->
        <section id="home">
        <div class="gambar">
                <img src="../../pict/images/wave2.png" alt="">
        </div>
    </section>
    <!--------------- HOME END --------------->
</body>
</html>