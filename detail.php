<?php

require 'TransactionController.php';
require 'Connect.php';


$transaction = new \BelajarNative\TransactionController(new \BelajarNative\Connect());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Detail</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="detail.php">Detail</a>
        </li>
  
      </ul>
      
    </div>
  </div>
</nav>
<div class="container">
<a href="print.php" class="btn btn-success">Print Detail Transaksi</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode barang</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Harga</th>
      <th scope="col">Satuan</th>
      <th scope="col">Jenis Barang</th>
      <th scope="col">Total Pembayaran</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach( $transaction->detail() as $row ) : ?>
    <tr>
        <td><?= $row['kode_barang'];?></td>
        <td><?=$row['nama_barang'];?></td>
        <td><?=$row['harga'];?></td>
        <td><?=$row['satuan'];?></td>
        <td><?=$row['jenis_barang'];?></td>
        <td><?=$row['total_pembayaran'];?></td>
        <td><?=$row['quantity'];?></td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>