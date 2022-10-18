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
    <link rel="stylesheet" href="index.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>E-Leaning Website</title>
</head>
<body>
    <!--------------- NAVBAR START --------------->
    <section id="navbars">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#" style="color: white;">E-Learning</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="#Home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Registrasi
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="admin/sebelumlogin/admin_register.php">Admin</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Login
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="admin/sebelumlogin/admin_login.php">Admin</a> 
                        <a class="dropdown-item" href="dosen/sebelumlogin/dosen_login.php">Dosen</a>   
                        <a class="dropdown-item" href="mahasiswa/sebelumlogin/mhs_login.php">Mahasiswa</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#keunggulan">Keunggulan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#akhir">Contact Us</a>
                </li>
            </ul>
        </div>
        </nav>
    </section>
    <!--------------- NAVBAR END --------------->
    <!--------------- HOME START --------------->
    <section id="Home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center">
                    <img src="pict/images/pens.png" alt="" class="gambarhome">
                </div>
                <div class="col-md-6">
                    <p class="pertama">Politeknik Elektronika Negeri Surabaya atau Electronic Engineering Polytechnic Institute of Surabaya adalah perguruan tinggi negeri yang terdapat di Kota Surabaya, Provinsi Jawa Timur, Indonesia. Politeknik Elektronika Negeri Surabaya secara resmi berdiri sejak tahun 1988.</p>
                    <button class="btn btn-primary" type="button">For More Information</button>
                </div>
            </div>
        </div>
        <img src="pict/images/wave1.png" alt="" class="gambar1">
    </section>
    <!--------------- HOME END --------------->
    <!--------------- KEUNGGULAN START --------------->
    <section id="keunggulan">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="kpertama">Politeknik Elektronika Negeri Surabaya atau Electronic Engineering Polytechnic Institute of Surabaya adalah perguruan tinggi negeri yang terdapat di Kota Surabaya, Provinsi Jawa Timur, Indonesia. Politeknik Elektronika Negeri Surabaya secara resmi berdiri sejak tahun 1988.</p>
                    <button class="btn btn-primary" type="button">For More Information</button>
                </div>
                <div class="col-md-6 text-center">
                    <img src="pict/images/pens.jpg" alt="" class="pens">
                </div>
            </div>
        </div>
    </section>
    <img src="pict/images/wave2.png" alt="" class="gambar2">

    <!--------------- KEUNGGULAN END --------------->
    <!--------------- FOOTER START --------------->
    <section id="akhir">
        <footer>
            <div class="container">
                <div class="footer-content">
                    <div class="row">
                        <div class="col-md-4">
                            <h4>E-Learning</h4>
                            <p class="apertama">Politeknik Elektronika Negeri Surabaya atau Electronic Engineering Polytechnic Institute of Surabaya adalah perguruan tinggi negeri yang terdapat di Kota Surabaya, Provinsi Jawa Timur, Indonesia. Politeknik Elektronika Negeri Surabaya secara resmi berdiri sejak tahun 1988.</p>
                        </div>
                        <div class="col-md-4">
                            <h4>Sosial Media</h4>
                            <div class="sosmed-icon text-center">
                                <a href=""><img src="pict/images/facebook-icon.png" alt=""></a>
                                <a href=""><img src="pict/images/instagram-icon.png" alt=""></a>
                                <a href=""><img src="pict/images/whatsapp-icon.png" alt=""></a>
                                <a href=""><img src="pict/images/linkedin-icon.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-md-4 lainya">
                            <h4>Contact Us</h4>
                            <p><i class="fas fa-map-pin"></i>Institut Teknologi Sepuluh Nopember, Kampus, Jl. Raya ITS, Keputih, Kec. Sukolilo, Kota SBY, Jawa Timur 60111</p>
                            <p><i class="fas fa-tty"></i>(031) 5947280</p>
                            <p><i class="fas fa-envelope-open-text"></i>pens@gmail.com</p>
                        </div>
                    </div>   
                </div>
            </div>
        </footer>
    </section>
    <!--------------- FOOTER END --------------->

</body>
</html>