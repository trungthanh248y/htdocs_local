<?php
    $hots="localhost";
    $username="root";
    $password="";
    $dbname="pp1901";

    //cread connect
    $conn=new mysqli($hots,$username,$password,$dbname);

    //KTra ket noi
    if($conn->connect_error){
        die("Connection failed: " . $con->connect_error);
    }
?>