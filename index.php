<?php
include 'koneksi.php';

$query = "SELECT * from tb_siswa";
$sql = mysqli_query($conn, $query);

$result = mysqli_fetch_assoc($sql);

var_dump($result);

?>

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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                SD ALAKADARNYA 1
            </a>
        </div>
    </nav>
    <!-- Judul -->
    <div class="container">
        <h1 class="mt-4"></h1>
        <figure>
            <blockquote class="blockquote">
                <p>Data Siswa SD Alakadarnya 1 </p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Data diri <cite title="Source Title">siswa dan siswi SD Alakadarnya 1</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-4">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
        <!-- Tabel Responsive -->
        <table class="table-responsive">
            <table class="table align-middle table-bordered table-hover" <thead>
                <tr>
                    <th scope="col">
                        <center>No</center>
                    </th>
                    <th scope="col">Nama</th>
                    <th scope="col">NISN</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    while($result = mysqli_fetch_assoc($sql)){
                    ?>
                    <tr>
                        <td scope="row">
                            <center><?php echo $result['id_siswa']; ?> </center>
                        </td>
                        <td><?php echo $result['nama_siswa']; ?> </td>
                        <td><?php echo $result['nisn_siswa']; ?> </td>
                        <td><?php echo $result['jeniskelamin_siswa']; ?> </td>
                        <td>
                            <img src="img/<?php echo $result['foto_siswa']; ?>" alt="" style="width: 100px">
                        </td>
                        <td><?php echo $result['alamat_siswa']; ?> </td>
                        <td>
                            <a href="kelola.php?ubah=1" type="button" class="btn btn-warning btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="proses.php?del=1" type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
    </div>
</body>

</html>