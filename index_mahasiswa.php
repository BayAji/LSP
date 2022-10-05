<?php include("config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

    <header class="navbar d-flex justify-content-center py-3" style="background-color: #e3f2fd">
        <ul class=" nav nav-pills">
            <li class="nav-item"><a href="index.php" class="nav-link"><b>SISTEM INFORMASI</b></a></li>

            <li class="nav-item"><a href="index_mahasiswa.php" class="nav-link active" aria-current="page">Mahasiswa</a></li>
            <li class="nav-item"><a href="index_dosen.php" class="nav-link">Dosen</a></li>
            <li class="nav-item"><a href="index_matakuliah.php" class="nav-link">Mata Kuliah</a></li>
            <li class="nav-item"><a href="index_ruang.php" class="nav-link">Ruang</a></li>
            <li class="nav-item"><a href="index_jadwal.php" class="nav-link">Jadwal</a></li>
        </ul>
    </header>

    <div class="container">
        <br>
        <a class="btn btn-primary" href="tambah_mahasiswa.php">[+] Tambah Mahasiswa</a>


        <div class="mt-3 card">
            <div class="card-body">
                <!-- Content here -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Fakultas</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM mahasiswa";
                        $query = mysqli_query($conn, $sql);

                        while ($mahasiswa = mysqli_fetch_array($query)) {
                            echo "<tr>";

                            echo "<td>" . $mahasiswa['id'] . "</td>";
                            echo "<td>" . $mahasiswa['nama'] . "</td>";
                            echo "<td>" . $mahasiswa['tgl_lahir'] . "</td>";
                            echo "<td>" . $mahasiswa['kelamin'] . "</td>";
                            echo "<td>" . $mahasiswa['prodi'] . "</td>";
                            echo "<td>" . $mahasiswa['fakultas'] . "</td>";

                            echo "<td>";
                            echo "<a class='btn btn-primary' href='edit_mahasiswa.php?id=" . $mahasiswa['id'] . "'>Edit</a> | ";
                            echo "<a class='btn btn-danger' href='hapus_mahasiswa.php?id=" . $mahasiswa['id'] . "'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>





    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>