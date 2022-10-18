<?php
session_start();
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
    <link rel="stylesheet" href="">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="js/matkul.js">
    <title>Document</title>
</head>
<body>
    <?php
    include '../../koneksi.php';
    $id = $_GET['id'];
    $sql = "SELECT * FROM daftartugas WHERE id_matkul = $id";
    $result = mysqli_query($conn, $sql);
    $nomor=1;
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
                                    <th scope="col ">No</th>
                                    <th scope="col ">Nama Tugas</th>
                                    <th scope="col ">Deskripsi</th>
                                    <th scope="col ">status</th>
                                    <th scope="col ">Action</th>
                                </tr>
                            </thead>
                            <?php
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr style='border-bottom:2px solid #302b63'>";
                                    echo "<th style='font-weight:400'>" .$nomor++. "</th>";
                                    echo "<th style='font-weight:400'>" . $row['namatugas'] . "</th>";
                                    echo "<th style='font-weight:400'>" . $row['deskripsi'] . "</th>";
                                    $status = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM tugas WHERE id_dt = '$row[id]' AND id_mhs = '$_SESSION[id]'"));
                                    if($status == 0){
                                        echo "<th style='font-weight:400'> - </th>";
                                    }else{
                                        echo "<th style='font-weight:400'> terupload </th>";
                                    }
                                    ?>
                                    <th>
                                        <a data-toggle='modal' data-target='#exampleModal<?php echo $row['id'] ?>' href=""><i class='fas fa-upload' style='color:green'></i></a> &nbsp;
                                        <a data-toggle='modal' data-target='#exampleModal2<?php echo $row['id'] ?>' href=""><i class='fas fa-recycle' style='color:green'></i></a> &nbsp;
                                        <a data-toggle='modal' data-target='#exampleModal3<?php echo $row['id'] ?>' href=""><i class='fas fa-info-circle' style='color:green'></i></a>
                                    </th>
                                    <?php
                                    echo "</tr>"; ?>
                                    <section id="tugasupload">
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Upload Tugas</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="mhs_uploadtugas2.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" id="tugas" name="tugas" value="<?php echo $row['id'] ?>">
                                                            <input type="hidden" id="matkul" name="matkul" value="<?php echo $row['id_matkul'] ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Upload Tugas</label>
                                                                <input class="form-control" type="file" id="upload" name="upload" required>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Deskripsi Tugas</label>
                                                                <input type="text" class="form-control" id="desk" name="desk" placeholder="Masukkan Nama Mata Kuliah" required>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="tugasupdate">
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal2<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Tugas</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="mhs_updatetugas2.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" id="tugas" name="tugas" value="<?php echo $row['id'] ?>">
                                                            <input type="hidden" id="matkul" name="matkul" value="<?php echo $row['id_matkul'] ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Upload Tugas</label>
                                                                <input class="form-control" type="file" id="upload" name="upload">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Deskripsi</label>
                                                                <input type="text" class="form-control" id="desk" name="desk" value="<?php echo $row['deskripsi']?>">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section id="detail">
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal3<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Update Tugas</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="mhs_updatetugas2.php" method="post" enctype="multipart/form-data">
                                                            <input type="hidden" id="tugas" name="tugas" value="<?php echo $row['id'] ?>">
                                                            <input type="hidden" id="matkul" name="matkul" value="<?php echo $row['id_matkul'] ?>">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Deskripsi</label>
                                                                <input type="text" class="form-control" id="desk" name="desk" value="<?php echo $row['deskripsi']?>" disabled>
                                                            </div>
                                                            <?php $sql2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tugas WHERE id_dt = '$row[id]'")); ?>
                                                            <div class="form-group">
                                                                <label for="exampleFormControlInput1">Nilai</label>
                                                                <input type="text" class="form-control" id="nilai" name="nilai" value="<?php echo $sql2['nilai']?>" disabled>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>


                                    <!-- <section id="tugasupdate">
                                         Modal 
                                         <div class="modal fade" id="exampleModal2<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="mhs_updatetugas2.php" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" id="tugas" name="tugas" value="<?php echo $row['id'] ?>">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Upload Tugas</label>
                                                            <input class="form-control" type="file" id="upload" name="upload" value="<?php echo  $row['content'] ?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleFormControlInput1">Deskripsi Tugas</label>
                                                            <input type="text" class="form-control" id="desk" name="desk" value="<?php echo  $row['deskripsi'] ?>">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                                            <button type="submit" class="btn btn-primary">Tambahkan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section> -->
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

    <!--------------- TAMBAH MATKUL END --------------->
    <section id="tugasupdate">
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="dosen_updatetugas2.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Upload Tugas</label>
                                <input class="form-control" type="file" id="upload" name="upload" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Deskripsi Tugas</label>
                                <input type="text" class="form-control" id="desk" name="desk" placeholder="Masukkan Nama Mata Kuliah" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
                                <button type="submit" class="btn btn-primary">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </section>

</body>

</html>