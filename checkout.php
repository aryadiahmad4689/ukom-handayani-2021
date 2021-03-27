<?php

use BelajarNative\Connect;
use BelajarNative\TransactionController;

session_start();
require 'Connect.php';
require 'item.php';
require 'TransactionController.php';

    $transaction = new TransactionController(new Connect());
    $con = new Connect();
    $transaction->storeTransaction();
    $data = $transaction->selectIdTransaksi();
    $cart = unserialize(serialize($_SESSION['cart']));
    for($i=0; $i<count($cart);$i++) {
        
        // update stok barang
        $transaction->updateStock($cart[$i]);

        // insert detail transaksi
        $transaction->insertDetailTransaksi($cart[$i],$data);
    }
    // clear cart barang
    unset($_SESSION['cart']);
 ?>
 Thanks for buying products. Click <a href="index.php">here</a> to continue purchasing products.