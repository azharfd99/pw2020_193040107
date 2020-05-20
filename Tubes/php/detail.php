<?php 
    if (!isset($_GET['kode'])){
        header("location: ../index.php");
        exit;
    }
    require 'functions.php';
    $kode = $_GET['kode'];

    $makan = query("SELECT * FROM makanan WHERE kode = $kode")[0];
?>
<html>
    <head>
        <title>detail</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
            background-image : url('../assets/img/100.jpg');
            background-size : cover;
            background-attachment: fixed;

        }
    </style>
    </head>

<body>
<nav>
<nav class="purple light-3">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">KETERANGAN MAKANAN</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      </ul>
</div>
  </nav>
</nav>
    <div class="row">
    <div class="col s12 m12 l12">
      <div class="card">
        <div class="card-image">
        <img src="../assets/img/<?= $makan["foto"]; ?>">
        </div>
        <div class="card-content">
        <div class="keterangan">
                <p><?= $makan["nama"]; ?></p>
                <p>produksi : <?= $makan["tgl_produksi"]; ?></p>
                <p>kadaluwarsa : <?= $makan["kadaluwarsa"]; ?></p>
                <p>harga : <?= $makan["harga"]; ?></p>
        </div>
          <div class="center">
    <button class="btn waves-effect waves-light black"> <a href="../index.php">kembali</a></button>
          </div>
          </div>
        </div>        
      </div>
    </div>
<script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>
