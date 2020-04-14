<?php
    require 'php/functions.php';
    $result = query("SELECT * FROM makanan")
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
        <?php foreach ($result as $makan) :?>
            <p class="nama">
                 <a href="php/detail.php?id=<?= $makan['kode'] ?>">
                    <?= $makan["nama"] ?>
                 </a>
            </p>
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