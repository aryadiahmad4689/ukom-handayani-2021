<?php
namespace BelajarNative;
class Connect {
    public function conn(){
        $con =  mysqli_connect("localhost", "root", "", "dbpenjualan");
        return $con;

    }   
    function query($query){
        $result = mysqli_query($this->conn(), $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ) {
            $rows[] = $row;
        }
        return $rows;
	}
}
