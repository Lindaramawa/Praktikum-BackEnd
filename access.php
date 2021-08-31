<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Form- Halaman Access</title>
</head>

<body>
    <?php
        if(isset($_SESSION['username'])){
            echo "<h1>Selamat Datang Anda Telah Berhasil Masuk Halaman Ini</h1>";
        }else {
            echo 'Silahkan klik <a href="form_login.php">disini</a> untuk kembali ke halaman Form Login.';
        }
    ?>
</body>

</html>