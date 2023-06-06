<?php
include "koneksi.php";

//Query untuk menambahkan data
 if(isset($_POST['aksi'])){
    if($_POST['aksi'] == "add"){
        $nisn_siswa = $_POST['nisn_siswa'];
        $nama_siswa = $_POST['nama_siswa'];
        $jeniskelamin_siswa = $_POST['jeniskelamin_siswa'];
        $foto_siswa = 'img1.jpg';
        $alamat_siswa = $_POST['alamat_siswa'];

        $query = "INSERT INTO tb_siswa VALUES(null, '$nisn_siswa', '$nama_siswa', '$jeniskelamin_siswa', '$alamat_siswa', '$foto_siswa') ";
        $sql = mysqli_query($conn, $query);

        if($sql){
            header("location: index.php");
            // echo "Data berhasil ditambahkan";
        } else {
            echo $query;
        }

        // var_dump($_POST);
        // die();
        // echo $nisn_siswa. " " .$nama_siswa. " " .$foto_siswa. " " .$alamat_siswa. " ";
    }
//Query untuk mengedit data
    else if($_POST['aksi'] == "edit"){
        echo "Edit Data";    
    }
 }
//Query untuk menghapus data
 if(isset($_GET['del'])){   
    $id_siswa = $_GET['del'];
    $query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa'";
    $sql= mysqli_query($conn, $query);

    
    if($sql){
        header("location: index.php");
        // echo "Data berhasil ditambahkan";
    } else {
        echo $query;
    }

    // echo "Hapus Data";
 }
 
?>