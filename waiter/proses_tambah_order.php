<?php
include '../koneksi.php';
session_start();

$id_user = $_SESSION['id_user'];
$id_meja = $_POST['id_meja'];
$id_menu = $_POST['id_menu'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah = $_POST['jumlah'];

$query = mysqli_query($koneksi, "INSERT INTO pesanan(id_user, id_meja, id_menu, id_pelanggan, jumlah) VALUE('$id_user', '$id_meja', '$id_menu', '$id_pelanggan', '$jumlah')");

if($query){
    header("Location: order.php");
}else{
    echo "<script>
    alert('Gagal tambah pesanan');
    window.location.assign(order.php);</script>";
}
?>