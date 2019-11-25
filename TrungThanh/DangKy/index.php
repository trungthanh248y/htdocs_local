<?php include "control/DataAccess.php";?>
<html>
    <title>Dang Ki</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <body>
        <div class="content">
            <?php 
                $access=new DataAccess;
                if(isset($_POST['btn_Gui'])){

                    $firstname=$_POST['firstname'];
                    $lastname=$_POST['lastname'];
                    $username=$_POST['username'];
                    $gender;
                    if($_POST['gender']=="male"){
                        $gender=1;
                    }
                    if($_POST['gender']=="female"){
                        $gender=0;
                    }
                    $email=$_POST['email'];
                    $pass=$_POST['pass'];
                    $repass=$_POST['repass'];

                    $err=$access->insert($firstname,$lastname,$username,$gender,$email,$pass,$repass);
                }
            ?>
            <?php 
                if(isset($_GET['id']) && $_GET['action']=="edit"){
                    $title="Sua Thong tin";
                    $access=new DataAccess;
                    echo $_GET['id'];
                    $slone=$access->SelectOne($_GET['id']);
                    var_dump($slone);
                }
                else
                    $title="Dang ky";
            ?>
            <?php include "label/header.php";?>
            <?php include "label/content.php";?>
            <?php include "label/footer.php";?>
        </div>
    </body>
</html>