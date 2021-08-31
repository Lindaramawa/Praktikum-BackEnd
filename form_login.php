<?php
    session_start();
    $msg = "";
    if($_POST){
        $user = "admin";
        $pass = "pass";

        if($_POST['username'] == $user && $_POST['password'] == $pass){
            $_SESSION['username'] = $_POST['username'];
            $msg = "Hallo ".$_POST['username'];
        } else {
            $msg = "gagal login";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Form Login</title>
    <link  rel="stylesheet" href="form.css">
</head>

<body>
        <?php echo $msg; ?>
        <div class="kotak_login">
            <p class = "tulisan_login"><a href="form_login.php">Form Login</a> | <a href="logout.php">Logout</a> | <a href="access.php">Tes Akses</a> | <a href="access2.php">Tes Akses 2</a></p>
            <form action="form_login.php" method="POST">
                <label for="username" >Username</label>
                <input type="text" name="username" class="form_login"> <br>
                <label for="password" >Password</label>
                <input type="password" name="password"class="form_login"> <br>
                <input type="submit" value="Login" class="tombol_login">
            </form>
</body>

</html>