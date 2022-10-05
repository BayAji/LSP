<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $kelamin = $_POST['kelamin'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];

    // buat query
    $sql = "INSERT INTO dosen (nama, kelamin, prodi, fakultas) VALUE ('$nama','$kelamin','$prodi','$fakultas')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index_dosen.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index_dosen.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>