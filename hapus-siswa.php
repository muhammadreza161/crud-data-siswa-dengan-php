<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_siswa WHERE id_siswa = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>