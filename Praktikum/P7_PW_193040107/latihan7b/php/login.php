<?php
session_start();
require 'functions.php';

if(isset($_SESSION['username'])){
    header("Location : admin.php");
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");

    if(mysqli_num_rows($cek_user) > 0){
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
        }
        if (hash('sha256', $row['id']) == $_SESSION['hash']){
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Login</title>
</head>
<body>
    <?php if(isset($error)) :?>
    <p>Username atau Password</p>
    <?php endif ?>
    <form action="" method="post">
    <table class="highlight">
        <tr>
            <td><label for="username">Username</label></td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
    </table>
    <p>
      <label for="rember">
        <input type="checkbox" name="remember" class="filled-in" checked="checked" />
        <span>Remember Me</span>
      </label>
    </p>
    <button class="btn waves-effect waves-light" type="submit" name="submit">Login
    <i class="material-icons right">send</i>
    </button>
    </form>
    <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini!</a></p>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>