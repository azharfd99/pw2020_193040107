<?php 
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
    mysqli_select_db($conn, "tubes_193040107") or die ("Database salah!");

    return $conn;
}

function query($sql){
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $foto = htmlspecialchars($data['foto']);
    $nama = htmlspecialchars($data['nama']);
    $tgl_produksi = htmlspecialchars($data['tgl_produksi']);
    $kadaluwarsa = htmlspecialchars($data['kadaluwarsa']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO makanan2
              VALUES
              ('', '$foto', '$nama', '$tgl_produksi', '$kadaluwarsa', '$harga')";

              mysqli_query($conn, $query);
              return mysqli_affected_rows($conn);
}
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan2 WHERE kode = $id");
    return mysqli_affected_rows($conn);
}
?>