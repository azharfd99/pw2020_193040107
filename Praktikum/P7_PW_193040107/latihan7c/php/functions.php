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
                (null, '$foto', '$nama', '$tgl_produksi', '$kadaluwarsa', '$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($kode)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan2 WHERE kode = $kode");
    return mysqli_affected_rows($conn);
}

function ubah($data)
    {
        $conn = koneksi(); 

        $kode = $data['kode'];
        $foto = htmlspecialchars($data['foto']);
        $nama = htmlspecialchars($data['nama']);
        $tgl_produksi = htmlspecialchars($data['tgl_produksi']);
        $kadaluwarsa = htmlspecialchars($data['kadaluwarsa']);
        $harga = htmlspecialchars($data['harga']);

        $query = "UPDATE makanan2
                        SET
                        foto = '$foto',
                        nama = '$nama',
                        tgl_produksi = '$tgl_produksi',
                        kadaluwarsa = '$kadaluwarsa',
                        harga = '$harga'
                        WHERE kode = '$kode' ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
function registrasi($data)
    {
        $conn = koneksi();
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

        $result =mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('Username telah digunakan');
        </script>";
    }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO user VALUES
                (null, '$username', '$password')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
}

?>
