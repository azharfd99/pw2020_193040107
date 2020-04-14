<?php
    require 'php/functions.php';

    $result = query("SELECT * FROM makanan")


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 5a</title> 
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css">
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
<table border="2" cellpadding="10" cellspacing="0">
    <tr>
        <th>Kode</th>
        <th>Foto</th>
        <th>Nama</th>
        <th>Tanggal Produksi</th>
        <th>Kadaluwarsa</th>
        <th>Harga</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($result as $makan) :?>
    <tr>
    <td><?= $makan["kode"];?></td>
    <td><img src="assets/img/<?= $makan["foto"];?>"></td>
    <td><?=$makan["nama"];?></td>
    <td><?=$makan["tgl_produksi"];?></td>
    <td><?=$makan["kadaluwarsa"];?></td>
    <td><?=$makan["harga"];?></td>
    </tr>
    <?php $makan++ ?>
    <?php endforeach; ?>
</table>
</div>
<footer class="grey darken-3 white-text center">
          <div class="container">
            <div class="row">
              <p>&copy;Azhar F. Copyright 2020</p>
            </div>
            </div>
        </footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>