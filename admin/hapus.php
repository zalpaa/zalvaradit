<?php
session_start();
include "koneksi.php";

if(!isset($_SESSION['id'])) {
    header("location:login.php?pesan=logindulu");
    exit;
}

$id_produk = $_GET['id_produk'];
$sql = "DELETE FROM produk WHERE id_produk = '$id_produk' ";
$query = mysqli_query($koneksi, $sql);
if ($query) {
header("location:dashboard.php?hapus=sukses");
exit;
} else {
header("location:dashboard.php?hapus=gagal");
}
?>