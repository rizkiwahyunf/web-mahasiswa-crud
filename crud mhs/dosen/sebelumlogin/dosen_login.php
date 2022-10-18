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
    <link rel="stylesheet" href="../../style.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>E-Leaning Website</title>
</head>
<body>
    <!--------------- NAVBAR START --------------->
    <section id="navbars">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#">E-Learning</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="../../index.php#Home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registrasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="admin_register.php">Admin</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="admin_login.php">Admin</a> 
                            <a class="dropdown-item" href="../../dosen/sebelumlogin/dosen_login.php">Dosen</a>   
                            <a class="dropdown-item" href="../../mahasiswa/sebelumlogin/mhs_login.php">Mahasiswa</a>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="../../index.php#keunggulan">Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php#akhir">Contact Us</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!--------------- NAVBAR END --------------->
    <!--------------- HOME START --------------->
    <section id="registrasi">
        <div class="container">
                    <div class="card shadow-lg border-0 mt-4">
                        <div class="card-header text-center">
                            Login Dosen
                        </div>
                        <div class="card-body">
                            <img src="../../pict/images/user.jpg" class="rounded-circle mx-auto d-block" alt="">
                            <form action="dosen_login2.php" method="post">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="Masukkan Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>   
                            </form>
                        </div>
                    </div>
        </div>
        <img src="../../pict/images/wave2.png" alt="" class="gambar1">
    </section>
    <!--------------- HOME END --------------->
</body>
</html>
