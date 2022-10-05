<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $kelamin = $_POST['kelamin'];
    $prodi = $_POST['prodi'];
    $fakultas = $_POST['fakultas'];

    // buat query
    $sql = "INSERT INTO mahasiswa (nama, tgl_lahir, kelamin, prodi, fakultas) VALUE ('$nama', '$tgl_lahir', '$kelamin', '$prodi', '$fakultas')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index_mahasiswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index_mahasiswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>