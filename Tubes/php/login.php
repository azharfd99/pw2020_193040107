<?php
session_start();
require 'functions.php';

if(isset($_SESSION['username'])){
    header("Location : admin.php");
}

if(isset($_COOKIE['username']) && isset ($_COOKIE['hash'])){
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash ('sha256', $row['id'], false)){
        $_SESSION['username'] = $_POST['username'];
        header("Location: admin.php");
        exit;
    }
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

            if (isset($_POST['remember'])){
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash ('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }
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
    <title>Login</title>
    <style>
            html,
        body {
            height: 100%;
        }
        html {
            display: table;
            margin: auto;
        }
        body {
            display: table-cell;
            vertical-align: middle;
            background : url('../assets/img/200.jpg');
            background-size : cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class="cyan">
    <?php if(isset($error)) :?>
    <p>Username atau Password</p>
    <?php endif ?>
    <form action="" method="post">
    <div class="card-panel z-depth-5">
    <div class="col s12 m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">person</i>
                <input type="text" name="username" id="username">
                <label for="username">Username</label>
            </div>
        </div>
        <div class="col m12 l12">
            <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
        </div>
    </table>
    
    <p>
      <label>
        <input type="checkbox" class="filled-in" checked="checked" />
        <span>Remember me</span>
      </label>
    </p>
        <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Login
    <i class="material-icons right">send</i>
    </button>      
        </div>
    </form>
    <div class="" style="font-size:14px;"><br>
            <a href="registrasi.php" class="center">Registrasi Sekarang</a>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>