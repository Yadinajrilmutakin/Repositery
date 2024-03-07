<!-- proses input -->
<?php 
include "koneksi.php";
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$barang=$_POST['barang'];
$kerusakan=$_POST['kerusakan'];
$komponen=$_POST['komponen'];
$tanggal=$_POST['tanggal'];
$harga=$_POST['harga'];



$simpan=$konek -> query ("insert into input(kode,nama,barang,kerusakan,komponen,tanggal,harga) values ('$kode','$nama','$barang','$kerusakan','$komponen','$tanggal','$harga')");

header ('location:tampil.php');

?>