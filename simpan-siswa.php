<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id_siswa  = $_POST['id_siswa'];
$nisn           = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_siswa (id_siswa, nisn, nama_lengkap, alamat) VALUES ('$id_siswa','$nisn', '$nama_lengkap', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>