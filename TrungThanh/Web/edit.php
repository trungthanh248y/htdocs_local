<?php
    include "KetNoi/conn.php";
    $id_user=$_GET['id'];
    $sql="SELECT * From student Where id=$id_user";
    $result=$conn->query($sql);
    $detal=$result->fetch_object();
    echo "<pre>";
        //var_dump($detal);
    echo "</pre>";
    
    $result_edit=false;
    if(isset($_POST['btn_submit'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $sdt=$_POST['phone'];
        $sql="UPDATE student set first_name='$first_name',last_name='$last_name',sdt='$sdt' where id=$id_user";
        //echo $sql;
        $result_edit=$conn->query($sql);
    }
    $sql="SELECT * FROM student Where id=$id_user";
    $result=$conn->query($sql);
    $detal=$result->fetch_object();
?>
<html>
    <title>Add</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <body>
        <div class="container">
            <p><a href="index.php" class="btn btn-info">Back home</a></p>
            <h2>Add students</h2>
            <p><?php if($result_edit): ?></p>
                <p class="">Insert thanh cong</p>
            <p><?php endif;?></p>
            <form action="edit.php?id=<?php echo $detal->id; ?>" method="post" class="">
                <label>First name</label>
                <input type="text" name="first_name" value="<?php $detal->first_name; ?>" class="form-control">
                <label>Last name</label>
                <input type="text" name="last_name" value="<?php $detal->last_name; ?>" class="form-control">
                <label>SDT</label>
                <input type="text" name="phone" value="<?php $detal->sdt; ?>" class="form-control">
                <input name="btn_submit" type="submit" value="Save" class="btn btn-success form-control">
            </form>
        </div>
    </body>
</html>