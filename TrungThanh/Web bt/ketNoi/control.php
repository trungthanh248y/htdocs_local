<?php 
    class students{
        public function moKetNoi(){
            include "conn.php";
            $x=new zxc();
            return $x->ketNoi();
        }
        public $table="student";
        public function SellectStuden(){
            $conn=$this->moKetNoi();
            $sql="SELECT * FROM $this->table";
            $result=$conn->query($sql);
            return $result->fetch_all();
        }
        function update($id,$first_name,$last_name,$sdt){
            $conn=$this->moKetNoi();
            $sql="UPDATE $this->table SET first_name='$first_name',last_name='$last_name',sdt=$sdt WHERE id='$id'";
            $result=$conn->query($sql);
        }
        function SelectOne($id){
            $conn=$this->moKetNoi();
            $sql="SELECT * FROM $this->table Where id=$id";
            $result=$conn->query($sql);
            return $result->fetch_object();
        }
        function Insert($first_name,$last_name,$sdt){
            $conn=$this->moKetNoi();
            $sql="INSERT INTO self::table (first_name,last_name,sdt) VALUE ($first_name,$last_name,$sdt)";
            return $conn->query($sql);
        }
        function Delete($id){
            $conn=$this->moKetNoi();
            $sql="DELETE FROM $this->table Where id=$id";
            return $conn->query($sql);
        }
    }
?>