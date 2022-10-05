<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $id_dosen = $_POST['id_dosen'];
    $id_matakuliah = $_POST['id_matakuliah'];
    $id_ruangkuliah = $_POST['id_ruangkuliah'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];

    // buat query
    $sql = "INSERT INTO jadwal (id_mahasiswa, id_dosen, id_matakuliah, id_ruangkuliah, hari, jam) VALUE ('$id_mahasiswa','$id_dosen','$id_matakuliah','$id_ruangkuliah', '$hari', '$jam')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index_jadwal.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index_jadwal.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>