<?php
//    phuong thuoc post
//    echo print_r($_POST);
//    echo print_r($_GET);
    $mess=array();
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if(empty($user)){
        $mess['username']="Chua nhap user";
    }else if($user!='trungthanh1'){
        $mess['username']="Nhap sai user";
    }

    if(empty($pass)){
        $mess['password']="Chua nhap pass";
    }else if($pass!='123456'){
        $mess['password']="Nhap sai pass";
    }
    $status="error";
    if(count($mess)==0){
        $status='success';
    }
    $reponce=array('status'=>$status,'mess'=>$mess);
    $jsonString=json_encode($reponce);
    echo  $jsonString;
?>