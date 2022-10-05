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
            <li class="nav-item"><a href="index.php" class="nav-link active" aria-current="page"><b>SISTEM INFORMASI</b></a></li>

            <li class="nav-item"><a href="index_mahasiswa.php" class="nav-link">Mahasiswa</a></li>
            <li class="nav-item"><a href="index_dosen.php" class="nav-link">Dosen</a></li>
            <li class="nav-item"><a href="index_matakuliah.php" class="nav-link">Mata Kuliah</a></li>
            <li class="nav-item"><a href="index_ruang.php" class="nav-link">Ruang</a></li>
            <li class="nav-item"><a href="index_jadwal.php" class="nav-link">Jadwal</a></li>
        </ul>
    </header>
    <br>

    <div class="container ">
        <div class="jumbotron">
            <h1>Sistem Informasi UIN Sunan Kalijaga</h1>
            <img src="uin.png" class="img-fluid" alt="Responsive image">
            <p class="lead">Universitas Islam Negeri adalah bentuk perguruan tinggi Islam negeri di Indonesia yang menyelenggarakan pendidikan akademik pada sejumlah disiplin ilmu pengetahuan, termasuk ilmu pengetahuan di luar studi keislaman, berlokasi di Jl. Marsda Adisucipto, Yogyakarta, Indonesia 55281.
        </div>

        <footer>
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2022</p>
                </div>
                <div class="col-md-6 text-md-right">
                    <a href="#" class="text-dark">Terms of Use</a>
                    <span class="text-muted mx-2">|</span>
                    <a href="#" class="text-dark">Privacy Policy</a>
                </div>
            </div>
        </footer>
    </div>


</body>

</html>