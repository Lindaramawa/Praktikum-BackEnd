<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("location:form_login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Form - Halaman Access 2</title>
</head>

<body>
    <h1>Anda berhasil mengakses halaman spesial ini!</h1>
    <h2><a href="form_login.php">Form Login</a> | <a href="logout.php">Logout</a> | <a href="access.php">Tes Akses</a> | <a href="access2.php">Tes Akses 2</a> </h2>
</body>

</html>