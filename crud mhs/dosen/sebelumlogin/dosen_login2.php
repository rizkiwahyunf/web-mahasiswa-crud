<?php
session_start();
if(isset($_POST['username']) && isset($_POST['pass'])){
    include '../../koneksi.php';
    $userId = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['pass']);
    $sql = "SELECT * FROM dosen WHERE username = '$userId' AND pass = '$password' AND email = '$email'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) == 1) {
        $_SESSION['user_is_logged_in'] = true;
        $_SESSION['id'] = $row['id'];
        header('location:dosen_berhasil.php');
    }else{
        $errorMessage = 'Maaf, Anda tidak dapat login';
        echo "<script>
				alert('Data yang dimasukkan tidak SINKRON!');
				window.location.href = 'dosen_login.php';
			</script>";
    }
}
?>