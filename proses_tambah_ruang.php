<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $ruang = $_POST['ruang_kuliah'];

    // buat query
    $sql = "INSERT INTO ruangkuliah (ruang_kuliah) VALUE ('$ruang')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index_ruang.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index_ruang.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>