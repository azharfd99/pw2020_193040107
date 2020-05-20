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
        <title>tubes</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
          html,
        body {
            height: 100%;
            
        }
        html {
            display: table;
            margin: auto;
        }
      .container {
            text-align : center;
      }
      .kiri {
            text-align : center;
      }
      body {
            display: table-cell;
            vertical-align: middle;
            background-image : url('assets/img/300.jpg');
            background-size : cover;
            background-attachment: fixed;
      }
      .find-me img{
      	max-width:100px;
      	padding:20px;
      	filter: drop-shadow(1px 1px 1px rgba(0,0,0,0.8));
      }

      .find-me a{
    	  color: darkred;
    	  font-size: 20px;	
      }
      footer img{
        width:200px;
        padding:10px;
      	filter: drop-shadow(1px 1px 1px rgba(0,0,0,0.8));
      }
      footer p{
      font-size: 30px;
      font-family: sans-serif;
      font-style:italic ;
      color : darkred;
    }
      
    </style>
    </head>
    
<body>
  <h4>DAFTAR HARGA MAKANAN</h4>
<form action="" method="get">
			<input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword" autofocus>
			<button type="submit" name="cari" class="btn pink">Cari!</button>
    </form>
<div class="container">
<?php if (empty($result)) : ?>
            <tr>
                <td>
                    <h1>Data Tidak Ditemukan</h1>
                </td>
            </tr>
            <?php else : ?>
        <?php foreach ($result as $makan) :?>
            <p class="nama">
                 <a href="php/detail.php?kode=<?= $makan['kode'] ?>">
                 <div class="row">
                 <div class="col s12 m12 l12">
                    <div class="card">
                      <div class="card-image">
                          <img src="assets/img/<?= $makan["foto"]; ?>">
                      </div>
                   <div class="card-content">
                    <div class="keterangan">
                    <button class="btn waves-effect waves-light orange"><?= $makan["nama"]?></button>
                  </div>  
                  </div>
                  </div>        
                  </div>
                </div>
                 </a>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
        <section id="find-me" class="find-me scrollspy">
          	<div class="find-me">
          		<h3 class="light grey-text text-darken-3 center">Find Me</h3>
          		<div class="row">
          		<div class="col m4 s12 center">
	      			<img src="assets/img/1.png">
	      			<p class="center-align"><a class="text-darken-4" href="http://instagram.com/azhar_f_99/">@Azhar_f_99</a></p>
	      		</div>
	      		<div class="col m4 s12 center">
	      			<img src="assets/img/2.png">
	      			<p class="center-align"><a class="text-darken-4" href="http://facebook.com/@azhar_fiqri/">@Azhar fiqri</a></p>
	      		</div>
	      		<div class="col m4 s12 center">
	      			<img src="assets/img/3.png">
	      			<p class="center-align"><a class="text-darken-4" href="http://line.com/@azharfd99/">@Azharfd99</a></p>
	      		</div>
	      		</div>
            </div>
            </section>
          	<footer class="center"> 
            <a href="php/login.php">
            <button class="btn waves-effect waves-light blue darken-3" type="submit" name="submit">login</button>
             </a>    
           <a href="php/admin.php">
           <button class="btn waves-effect waves-light red" type="submit" name="submit">admin</button>
           </a>
           <div class="col m4 s12 center">
          <img src="assets/img/anim.png">
        </div>
           <p>&copy;Azharf. Copyright 2020</p>
          </footer>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
</body>
</html>