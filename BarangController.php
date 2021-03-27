<?php
namespace BelajarNative;

class BarangController {
    
    protected $db ;

    public  function __construct(Connect $db)
    {
        $this->db = $db;
    }

    public function index() 
    {
        $table ="SELECT * FROM barang";
        $barang = $this->db->query($table);
        return $barang;
    }

    public function store($kode_barang,$nama_barang,$harga,$satuan,$stok,$jenis_barang)
    {
        mysqli_query($this->db->conn(),"INSERT into barang values('','$kode_barang','$nama_barang','$harga','$satuan','$stok','$jenis_barang')");
    }
}