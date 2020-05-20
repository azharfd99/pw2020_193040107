<?php
    //menghubungkan dengan file
    require 'functions.php';
    session_start();

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit;
    }
    if(isset($_GET['cari'])) {
      $keyword = $_GET['keyword'];
      $result = query("SELECT  * FROM makanan2 WHERE
          foto LIKE '%$keyword%'OR
          nama LIKE '%$keyword%'OR
          tgl_produksi LIKE '%$keyword%'OR
          kadaluwarsa LIKE '%$keyword%'OR
          harga LIKE '%$keyword%'
          
      ");
    } else {
    $result = query("SELECT * FROM makanan2");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <title>Admin</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>
      body{
        background-image: url('../assets/img/400.jpg');
        background-size : cover;
        background-attachment: fixed;
      }
      footer {
      width : 500px;
      padding: 0px;
      margin :auto;
	    box-shadow:  0 0 10px rgba(0,0,0,5);
      }
      footer p{
      font-size: 30px;
      font-family: sans-serif;
      font-style:italic ;
      color : darkred;
    }
      footer img{
        width:200px;
        padding:10px;
      	filter: drop-shadow(1px 1px 1px rgba(0,0,0,0.8));
      }
    </style>
        
    </head>
<body>



<nav>
<nav class="blue lighten-2">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">DAFTAR HARGA MAKANAN</a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      </ul>
</div>
</nav>
</nav>
<form action="" method="get">
			<input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword" autofocus>
			<button type="submit" name="cari" class="btn purple">Cari!</button>
		</form>
<div class="container">
<table class="highlight" border="2" cellpadding="10" cellspacing="0">
            <th>kode</th>
            <th>opsi</th>
            <th>foto</th>
            <th>nama</th>
            <th>tanggal produksi</th>
            <th>kadaluwarsa</th>
            <th>Harga</th>
        </tr>
        <?php if (empty($result)) : ?>
            <tr>
                <td>
                    <h1>Data Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
        <?php $i = 1; ?>
        <?php foreach ($result as $makan) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
            <a class="waves-effect waves-light btn green" href="ubah.php?kode=<?= $makan['kode']; ?>">Ubah</a>
            <a class="waves-effect waves-light btn orange" href="hapus.php?kode=<?= $makan['kode']; ?>" onclick = "return confirm('Apakah anda yakin ingin menghapusnya ?')">Hapus</a>
            </td>
            <td><img src="../assets/img/<?= $makan['foto']; ?>" alt=""></td>
            <td><?= $makan['nama']; ?></td>
            <td><?= $makan['tgl_produksi']; ?></td>
            <td><?= $makan['kadaluwarsa']; ?></td>
            <td><?= $makan['harga']; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
        <?php endif; ?>
    </table>
    <footer class=" center">
    <a href="tambah.php">
    <button class="btn waves-effect waves-light blue darken-3" type="submit" name="submit">Tambah Data</button>
    </a>    
    <a href="logout.php">
    <button class="btn waves-effect waves-light red" type="submit" name="submit">Logout</button>
    </a>
    <div class="col m4 s12 center">
      <img src="../assets/img/anim.png">
    </div>
    <p>&copy;Azharf. Copyright 2020</p>
      </footer>
        <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
</body>
</html>