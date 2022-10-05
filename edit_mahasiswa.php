<?php

include("config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: index_mahasiswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
<header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1">Edit Mahasiswa</span>
            </div>
        </nav>
        <br>
    </header>

    <form action="proses_edit_mahasiswa.php" method="POST">

        <fieldset>
            <div class="container">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nama :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir :</label>
                            <div class="col-sm-10">
                                <input type="text" name="tgl_lahir" class="form-control" placeholder="DD/MM/YYYY">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin :</label>
                            <div class="col-sm-10">
                                <label><input type="radio" name="kelamin" value="Laki-laki"> Laki-laki</label>
                                <label><input type="radio" name="kelamin" value="Perempuan"> Perempuan</label>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Prodi :</label>
                            <div class="col-sm-10">
                                <input type="text" name="prodi" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Fakultas :</label>
                            <div class="col-sm-10">
                                <input type="text" name="fakultas" class="form-control">
                            </div>
                        </div>

                        <p>
                            <input class='btn btn-primary' type="submit" value="Daftar" name="daftar" />
                        </p>

                    </div>
                </div>
            </div>

        </fieldset>


    </form>

</body>

</html>