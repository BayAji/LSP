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

            <li class="nav-item"><a href="index_mahasiswa.php" class="nav-link">Mahasiswa</a></li>
            <li class="nav-item"><a href="index_dosen.php" class="nav-link">Dosen</a></li>
            <li class="nav-item"><a href="index_matakuliah.php" class="nav-link">Mata Kuliah</a></li>
            <li class="nav-item"><a href="index_ruang.php" class="nav-link">Ruang</a></li>
            <li class="nav-item"><a href="index_jadwal.php" class="nav-link active" aria-current="page">Jadwal</a></li>
        </ul>
    </header>

    <div class="container">
        <br>
        <a class="btn btn-primary" href="tambah_jadwal.php">[+] Tambah Jadwal</a>

        <div class="mt-3 card">
            <div class="card-body">
                <!-- Content here -->
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Mahasiswa</th>
                            <th scope="col">Prodi</th>
                            <th scope="col">Mata Kuliah</th>
                            <th scope="col">Ruang Kuliah</th>
                            <th scope="col">Hari</th>
                            <th scope="col">Jam</th>
                            <th scope="col"> Dosen</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // $sql = "SELECT mahasiswa.id, mahasiswa.nama, mahasiswa.prodi, matakuliah.nama, ruangkuliah.ruang_kuliah, jadwal.hari, jadwal.jam, dosen.nama FROM mahasiswa INNER JOIN matakuliah INNER JOIN ruangkuliah INNER JOIN dosen" ;

                        $query = mysqli_query($conn, "SELECT jadwal.id, mahasiswa.id as idmahasiswa, mahasiswa.nama, mahasiswa.prodi, matakuliah.nama as namamatakuliah, ruangkuliah.ruang_kuliah, jadwal.hari, jadwal.jam, dosen.nama as namadosen FROM jadwal 
                        LEFT JOIN mahasiswa ON mahasiswa.id = jadwal.id_mahasiswa
                        LEFT JOIN matakuliah ON matakuliah.id = jadwal.id_matakuliah
                        LEFT JOIN ruangkuliah ON ruangkuliah.id = jadwal.id_ruangkuliah
                        LEFT JOIN dosen ON dosen.id = jadwal.id_dosen");

                        while ($jadwal = mysqli_fetch_array($query)) {

                            echo "<tr>";

                            echo "<td>" . $jadwal['id'] . "</td>";
                            echo "<td>" . $jadwal['idmahasiswa'] . "</td>";
                            echo "<td>" . $jadwal['nama'] . "</td>";
                            echo "<td>" . $jadwal['prodi'] . "</td>";
                            echo "<td>" . $jadwal['namamatakuliah'] . "</td>";
                            echo "<td>" . $jadwal['ruang_kuliah'] . "</td>";
                            echo "<td>" . $jadwal['hari'] . "</td>";
                            echo "<td>" . $jadwal['jam'] . "</td>";
                            echo "<td>" . $jadwal['namadosen'] . "</td>";


                            echo "<td>";
                            echo "<a class='btn btn-danger' href='hapus_jadwal.php?id=" . $jadwal['id'] . "'>Hapus</a>";
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