<?php
require'functions.php';
if(isset($_POST['register'])){
    if(registrasi($_POST) > 0){
        echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('Registrasi Gagal!');
            document.location.href = 'login.php';
        </script>";
    }
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
    <title>Document</title>
</head>
<body>
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
    <button class="btn waves-effect waves-light" type="submit" name="register">Register
    <i class="material-icons right">send</i>
    </button>
    </form>  
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>