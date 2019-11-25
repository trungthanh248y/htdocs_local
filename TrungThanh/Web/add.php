<?php 
    include "KetNoi/conn.php";
    if(isset($_POST["btn_submit"])){
        $first_name=$_POST["first_name"];
        $last_name=$_POST["last_name"];
        $phone=$_POST["phone"];

        //creat inset sql
        //$sql="INSERT INTO student('first_name','last_name','sdt') VALUE ('%s','%s','%s')";
        $sql1="INSERT INTO student(first_name,last_name,sdt) VALUE ("."'"."$first_name"."'".","."'"."$last_name"."'".","."'"."$phone"."'".")";
        $result=$conn->query($sql1);
        echo $sql1;
        echo "<pre>";
            var_dump($result);
        echo "</pre>";
    }
?>
<html>
    <title>Add</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <body>
        <div class="container">
            <p><a href="index.php" class="btn btn-info">Back home</a></p>
            <h2>Add students</h2>
            <form action="add.php" method="post" class="">
                <label>First name</label>
                <input type="text" name="first_name" value="" class="form-control">
                <label>Last name</label>
                <input type="text" name="last_name" value="" class="form-control">
                <label>SDT</label>
                <input type="text" name="phone" value="" class="form-control">
                <input name="btn_submit" type="submit" value="Save" class="btn btn-success form-control">
            </form>
        </div>
    </body>
</html>