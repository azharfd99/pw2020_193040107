<?php
    require 'php/functions.php';
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
<html>
    <head>
        <title>Laihan 5c</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css">
    </head>
    
<body>
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
<?php if (empty($result)) : ?>
            <tr>
                <td>
                    <h1>Data Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
        <?php foreach ($result as $makan) :?>
            <p class="nama">
                 <a href="php/detail.php?id=<?= $makan['kode'] ?>">
                    <?= $makan["nama"] ?>
                 </a>
            </p>
        <?php endforeach; ?>
        <?php endif; ?>
        </table>
    </div>
    <footer class="grey darken-3 white-text center">
          <div class="container">
            <div class="row">
            <a href="php/admin.php" class="waves-effect waves-light btn card-panel teal lig">Admin</a>
            </div>
            </div>
        </footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>