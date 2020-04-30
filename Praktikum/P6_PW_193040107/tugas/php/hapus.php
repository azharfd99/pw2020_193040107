<?php
	require 'functions.php';
    $kode = $_GET['kode'];
		if (hapus($kode) > 0) {
			echo "<script>
				alert('data berhasil dihapus');
				document.location.href = 'admin.php';
			</script>";
		}else {
			echo "<script>
				alert('data gagal dihapus');
				document.location.href = 'admin.php';
			</script>";
		}


?>