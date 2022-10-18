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
    <link rel="stylesheet" href="">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="js/matkul.js">
    <title>Document</title>
</head>

<body>
    <?php
    include '../../koneksi.php';

    
    
    $sql = "SELECT * FROM daftartugas";
    $result = mysqli_query($conn, $sql);
    ?>
    <section id="dosen">
        <div class="container">
            <form action="">
                <div class="card text-center">
                    <div class="card-header">
                        <h3 class="display-5">Daftar Tugas</h3>
                    </div>
                    <div class=" card card-body">
                        <table class="table table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col ">Nama Tugas</th>
                                    <th scope="col ">Deskripsi</th>
                                    <th scope="col ">Mata Kuliah</th>
                                    <th scope="col ">Action</th>
                                </tr>
                            </thead>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr style='border-bottom:2px solid #302b63'>";
                                    echo "<th style='font-weight:400'>" . $row['namatugas'] . "</th>";
                                    echo "<th style='font-weight:400'>" . $row['deskripsi'] . "</th>";
                                    $sql2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM matakuliah WHERE id_matakuliah = '$row[id_matkul]'"));
                                    echo "<th style='font-weight:400'>" . $sql2['matkul'] . "</th>"; ?>
                                    <th>
                                        <a data-toggle='modal' data-target='#exampleModal<?php echo $row['id'] ?>' href="#tugasupload"><i class='fas fa-upload' style='color:green'></i></a>
                                        <a data-toggle='modal' data-target='#exampleModal<?php echo $row['id'] ?>' href=""><i class='fas fa-recycle' style='color:green'></i></a>
                                    </th>
                                    <?php
                                    echo "</tr>"; ?>
                                    
                                <?php
                                }
                            } else {
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
    <!--------------- TAMBAH MATKUL START --------------->

</body>

</html>