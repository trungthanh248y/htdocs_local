<?php 
    class DataAccess{
        protected $table="DangKy";
        public $conne;
        function __construct(){
            include "db.php";
            $this->conne=$conn;
        }
        function insert($firstname,$lastname,$username,$gender,$email,$pass,$repass){
            $err=[];
            //$temp=[];
            // $detal=$access->dK($temp);
            // var_dump($detal);

            if($username==""||strlen($username)<3){
                $err['username']="username k hop le";
            }
            else{
                $sql="SELECT username FROM $this->table WHERE username='$username'";
                $a=$this->conne->query($sql)->fetch_object();
                //var_dump($a);
                if($a!=NULL){
                    $err['check_username']="username Da ton tai";
                }
            }

            if($email==""){
                $err['email']="Ban chua nhap email";
            }
            else{
                $sql="SELECT email FROM $this->table WHERE email='$email'";
                $a=$this->conne->query($sql)->fetch_object();
                if($a!=NULL){
                    $err['email']="email nay da dc sd";
                }
            }

            if($firstname==""||strlen($firstname)<3){
                $err['firstname']="firstname cua ban k dung dk";
            }
            if($lastname==""||strlen($lastname)<3){
                $err['lastname']="lastname k dung dinh dang";
            }
            //var_dump($err);
            if(count($err)!=0){
                // foreach($err as $k=>$v){
                //     echo $v;
                // }
                return $err;
            }
            else{
                if($pass!=$repass){
                    echo "Xac Nhan Lai pass";
                }
                else{
                    $sql="INSERT INTO $this->table (firstname,lastname,username,gender,email,pass)VALUES('$firstname','$lastname','$username','$gender','$email',md5('$pass'))";
                    return $this->conne->query($sql);
                }
            }      
            
        }
        function select_all(){
            $sql="SELECT * FROM $this->table";
            return $this->conne->query($sql)->fetch_all();
        }
        function dkEmail($email){
            $sql="SELECT email FROM $this->table WHERE email='$email'";
            return $this->conne->query($sql);
        }
        // function dkUsername($username,$a){
        //     $sql="SELECT * FROM $this->table WHERE username='$username'";
        //     $a=$this->conne->query($sql);
        //     return $a;
        // }
        // function dK($temp=false,$email,$username){
        //     $sql="SELECT email FROM $this->table WHERE (email=='$email')AND(username=='$username')";
        //     $temp['email']=$this->conne->query($sql);
        //     $sql="SELECT username FROM $this->table";
        //     $temp['username']=$this->conne->query($sql);
        //     return $temp;
        // }
        
        function SelectOne($id){
            $sql="SELECT * FROM $this->table WHERE id=$id";
            return $this->conne->query($sql)->fetch_object();
        }

        function Update($id,$firstname,$lastname,$username,$gender,$email,$pass){
            $sql="UPDATE $this->table SET `firstname`=$firstname,`lastname`=$lastname,`username`=$username,`gender`=$gender,`email`=$email,`pass`=$pass WHERE id=$id";
            return $this->conne->query($sql);
        }
    }
?>