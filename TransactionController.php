<?php

namespace BelajarNative;

class TransactionController {

    protected $db ;

    public  function __construct(Connect $db)
    {
        $this->db = $db;
    }

    public function storeTransaction()
    {
        $sql1 = 'INSERT INTO transaksi (name, date_transaction) VALUES ("new order","'.date('Y-m-d').'")';

        $data =mysqli_query($this->db->conn(), $sql1);

        return $data;

    }

    public function selectIdTransaksi() {
        $query = "SELECT id from transaksi ORDER BY id DESC";
        $data = $this->db->query($query)[0]; 
        return $data;
    }

    public function insertDetailTransaksi($cart,$data)
    {
        $sql2 = 'INSERT INTO detail_transaksi (barang_id, transaction_id, total_pembayaran, quantity) VALUES ('.$cart->id.', '.$data['id'].', '.$cart->price.', '.$cart->quantity.')';
        $data =mysqli_query($this->db->conn(), $sql2);

    }

    public function updateStock($cart) 
    {
        $query = "UPDATE barang set stock = stock - ".$cart->quantity." where id=".$cart->id."";
        mysqli_query($this->db->conn(), $query);
    }

    public function detail() 
    {
        $query = "SELECT * FROM detail_transaksi d INNER JOIN transaksi t on d.transaction_id = t.id INNER JOIN barang b on d.barang_id =b.id";
        $detail = $this->db->query($query);
        return $detail;
    }
}