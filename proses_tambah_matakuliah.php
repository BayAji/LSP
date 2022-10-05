<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $sks = $_POST['sks'];
    $id_dosen = $_POST['id_dosen'];
   

    // buat query
    $sql = "INSERT INTO matakuliah (nama, sks, id_dosen) VALUE ('$nama','$sks','$id_dosen')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index_matakuliah.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index_matakuliah.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>