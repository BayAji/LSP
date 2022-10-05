<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mata Kuliah Baru </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1">Tambah Mata Kuliah</span>
            </div>
        </nav>
        <br>
    </header>

    <form action="proses_tambah_matakuliah.php" method="POST">

        <fieldset>

            <div class="container">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">Nama :</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">SKS :</label>
                            <div class="col-sm-10">
                                <input type="text" name="sks" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label">ID Dosen :</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_dosen" class="form-control">
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