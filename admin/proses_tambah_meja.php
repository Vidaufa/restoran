<?php
include '../koneksi.php';

$nama_meja = $_POST['nama_meja'];
$harga_meja = $_POST['harga_meja'];

$query = mysqli_query($koneksi, "INSERT INTO meja(nama_meja, harga_meja) VALUE('$nama_meja', '$harga_meja')");

if($query){
    header("Location: meja.php");
}else{
    echo "<script>
    alert('Gagal tambah meja');
    window.location.assign(meja.php);</script>";
}
?>