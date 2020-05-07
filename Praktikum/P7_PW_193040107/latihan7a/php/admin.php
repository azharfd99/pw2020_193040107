<?php
    //menghubungkan dengan file
    require 'functions.php';

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
        <title>tugas</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../assets/css/style.css">
        
    </head>
<body>
<a href="logout.php">
<button class="btn waves-effect waves-light" type="submit" name="submit">Logout</button>
</a>
<a href="tambah.php">
<button class="btn waves-effect waves-light" type="submit" name="submit">Tambah Data</button>
</a>
<form action="" method="get">
			<input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword" autofocus>
			<button type="submit" name="cari" class="btn">Cari!</button>
		</form>
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
            <a class="waves-effect waves-light btn oranges" href="hapus.php?kode=<?= $makan['kode']; ?>" onclick = "return confirm('Apakah anda yakin ingin menghapusnya ?')">Hapus</a>
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