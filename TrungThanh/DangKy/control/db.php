<?php 
    $hots="localhost";
    $user="root";
    $pass="";
    $db="pp1901";
    $conn=new mysqli($hots,$user,$pass,$db);
    if($conn->connect_error){
        die("Loi: ".$conn->connect_error);
    }
?>