<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js">
    </script>
    <!-- Penutup Bootstrap -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Penutup Font Awesome -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>SD Alakadarnya</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                SD ALAKADARNYA 1
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
            <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
            <div class="col-sm-10">
                <input type="text" name="nisn_siswa" class="form-control" id="nisn" placeholder="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama_siswa" class="form-control" id="nama" placeholder="">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <select class="form-select" name="jeniskelamin_siswa" aria-label="Default select example">
                    <option selected>Pilih jenis kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="foto_siswa" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-10">
                <div class="mb-3">
                    <input class="form-control" type="file" name="foto_siswa" id="foto">
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="alamat_siswa" id="alamat_siswa" rows="3"></textarea>
            </div>
        </div>
        <div class="mb-3 row mt-4">
            <div class="col">
                <?php
                if(isset($_GET['ubah'])){
                ?>
                    <button type="submit" name="aksi" value="edit" class="btn btn-warning">
                        <i class="fa fa-pencils"></i>
                        Edit
                    </button>
                <?php
                    } else {
                ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">
                        <i class="fa fa-save"></i>
                        Tambahkan
                    </button>
                <?php
                     }
                ?>
                <a href="index.php" type="button" class="btn btn-danger">
                    <i class="fa fa-backward"></i>
                    Batal
                </a>
            </div>
        </div>
        </form>
</body>

</html>