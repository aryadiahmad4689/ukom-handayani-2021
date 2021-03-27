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
<div class="container">
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

<script>
		window.print();
	</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>