<?php
require 'BarangController.php';
require 'Connect.php';


$barang = new \BelajarNative\BarangController(new \BelajarNative\Connect());

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $barang->store($_POST['kode_barang'],$_POST['nama_barang'],$_POST['harga'],$_POST['satuan'],$_POST['stok'],$_POST['jenis_barang']);
    header("location:index.php");
}