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
    <title>registrasi</title>
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
            background-image: url('../assets/img/200.jpg');
            background-size : cover;
            background-attachment: fixed;
        }
    </style>
</head>
<body class = "cyan">
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
        <div class="center">
        <button class="btn waves-effect waves-light" type="submit" name="register">Register
    <i class="material-icons right">send</i>
    </button>
        </div>
    </form>
    <div class="" style="font-size:14px;"><br>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>