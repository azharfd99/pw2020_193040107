<?php
require 'functions.php';
$kode = $_GET['kode'];
$makan = query("SELECT * FROM makanan2 WHERE kode = $kode")[0];
if (isset($_POST['ubah'])) {

	if (ubah($_POST) > 0) {
		echo "<script>
				alert('data berhasil diubah');
				document.location.href = 'admin.php';
			</script>";
	} else {
		echo "<script>
				alert('data gagal diubah');
				document.location.href = 'admin.php';
			</script>";
	}
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>ubah data</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../assets/css/materialize.min.css" media="screen,projection" />
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
	<form action="" method="post">
		<input type="hidden" name="kode" value="<?= $makan['kode'] ?>">
		<input type="hidden" name="fotodulu" value="<?= $makan["foto"]; ?>">
		<table>
			<tr>
				<td><label for="foto">Foto :</label></td>
				<td><img src="../assets/img/<?= $makan["foto"]; ?>"></td>
				<td><input type="text" name="foto" id="foto" value="<?= $makan["foto"]; ?>"></td>
				<td><label for="nama">Nama :</label></td>
				<td><input type="text" name="nama" id="nama" value="<?= $makan["nama"]; ?>"></td>
				<td><label for="tgl_produksi">Tanggal Produksi :</label></td>
				<td><input type="text" name="tgl_produksi" id="tgl_produksi" value="<?= $makan["tgl_produksi"]; ?>"></td>
				<td><label for="kadaluwarsa">Kadaluwarsa :</label></td>
				<td><input type="text" name="kadaluwarsa" id="kadaluwarsa" value="<?= $makan["kadaluwarsa"]; ?>"></td>
				<td><label for="harga">Harga</label></td>
				<td><input type="text" name="harga" id="harga" value="<?= $makan["harga"]; ?>"></td>

			</tr>
		</table>
		<button class="waves-effect waves-light btn" type="submit" name="ubah">ubah
		</button>

	</form>
	<script type="text/javascript" src="../assets/js/materialize.min.js"></script>


</body>

</html>