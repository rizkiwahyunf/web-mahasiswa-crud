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
    <link rel="stylesheet" href="css/admin_tambahmhs.css">
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
    <!--------------- TAMBAH DOSEN START --------------->
    <?php
        include '../../koneksi.php';

        $sql = "SELECT * FROM matakuliah";
        $result = mysqli_query($conn, $sql);
        $no=1;
    ?>
    <section id="mhs">
        <div class="container">
            <form action="">
                <div class="card text-center">
                    <div class="card-header">
                        <h3 class="display-5">Daftar Mata Kuliah</h3>
                    </div>
                    <div class=" card card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col ">No</th>
                                    <th scope="col ">Mata Kuliah</th>
                                    <th scope="col ">Action</th>
                                </tr>
                            </thead>
                            <?php
                                if (mysqli_num_rows($result) > 0){
                                    while ($row = mysqli_fetch_assoc($result)){
                                        echo "<tr style='border-bottom:2px solid #302b63'>";
                                        echo "<th style='font-weight:400'>" . $no++. "</th>";
                                        echo "<th style='font-weight:400'>".$row['matkul']. "</th>";
                                        echo "<th><a href='dosen_uploadnilai.php?id=$row[id_matakuliah]' class='btn btn-primary'>Masuk</a></th>";
                                        echo "</tr>";
                                    }
                                }else{
                                    ?>
                                    <?php
                                }
                                mysqli_close($conn);
                            ?>
                        </table>
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