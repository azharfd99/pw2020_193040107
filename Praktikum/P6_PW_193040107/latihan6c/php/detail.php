<?php 
    if (!isset($_GET['id'])){
        header("location: ../index.php");
        exit;
    }
    require 'functions.php';
    $id = $_GET['id'];

    $makan = query("SELECT * FROM makanan WHERE kode = $id")[0];
?>
<html>
    <head>
        <title>Latihan 6c</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../assets/css/style.css">
        
    </head>

<body>
<nav>
<nav class="grey darken-3">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">DAFTAR HARGA MAKANAN</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      </ul>
</div>
  </nav>
</nav>
<div class="container blue lighten-5">
        <div class="foto">
            <img src="../assets/img/<?= $makan["foto"]; ?>">
         </div>
            <div class="keterangan">
                <p><?= $makan["nama"]; ?></p>
                <p><?= $makan["tgl_produksi"]; ?></p>
                <p><?= $makan["kadaluwarsa"]; ?></p>
                <p><?= $makan["harga"]; ?></p>
            </div>

            <button class="kembali"> <a href="../index.php">kembali</a></button>
    </div>
    <footer class="grey darken-3 white-text center">
          <div class="container">
            <div class="row">
              <p>&copy;Azhar F. Copyright 2020</p>
            </div>
            </div>
        </footer>
<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>
