<?php 
    include "moKetNoi.php";
    class controls extends moKetNoi{
        public $table="student";
        function Insets($first_name,$last_name,$sdt){
            $conn=$this->chuoiKetNoi();
            $sql="INSERT INTO $this->table (first_name,last_name,sdt)VALUES('$first_name','$last_name','$sdt')";
            return $conn->query($sql);
        }
        function Select(){
            $conn=$this->chuoiKetNoi();
            $sql="SELECT *FROM $this->table";
            $result=$conn->query($sql);
            return $result->fetch_all();
        }
    }
?>