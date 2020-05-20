<?php
	require 'functions.php';
	session_start();

    if(!isset($_SESSION['username'])){
        header("Location: login.php");
        exit;
    }

	if (isset($_POST['tambah'])) {
			
		if (tambah($_POST) > 0) {
			echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		}else {
			echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'admin.php';
			</script>";
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah data</title>
        <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
	<form action="" method="post">
		<tr>
			<td><label for="foto">Foto :</label></td>
				<td><input type="file" name="foto" id="foto"></td>
			<td><label for="nama">Nama :</label></td>
				<td><input type="text" name="nama" id="nama"></td>
			<td><label for="tgl_produksi">Tanggal Produksi :</label></td>
				<td><input type="text" name="tgl_produksi" id="tgl_produksi"></td>
			<td><label for="kadaluwarsa">Kadaluwarsa :</label></td>
				<td><input type="text" name="kadaluwarsa" id="kadaluwarsa"></td>
			<td><label for="harga">Harga</label></td>
				<td><input type="text" name="harga" id="harga"></td>

        </tr>
		<button class="waves-effect waves-light btn" type="submit" name="tambah">Tambah Data</button>
		<br>
		<br>	
		<a href="admin.php" color="blue">
		<button class="waves-effect waves-light btn" type="submit" name="tambah">Kembali
		</button>
		</a>

	</form>
    <script type="text/javascript" src="../assets/js/materialize.min.js"></script>
            

</body>
</html>