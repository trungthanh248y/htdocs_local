<?php
    include "KetNoi/conn.php";
    $sql = "SELECT * From student";
    $result=$conn->query($sql);
    $all_student=$result->fetch_all();
    echo "<pre>";
        //var_dump($all_student);
    echo "</pre>";
?>

<html>
    <title>Web 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">       
    <body>
        <div class=container>
        <form method="get"></form>
            <p><a href="add.php" class="btn btn-info">ADD STUDENTS</a></p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Frirst</th>
                        <th scope="col">Last</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($all_student as $value):?>
                    <tr>
                        <th scope="row"><?php echo $value[0]; ?></th>
                        <td><?php echo $value[1]; ?></td>
                        <td><?php echo $value[2]; ?></td>
                        <td><?php echo $value[3]; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $value[0];?>" class="btn btn-info">Edit</a>
                            <a href="delete.php?id=<?php echo $value[0];?>" class="btn btn-danger">Dlete</a>
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </form>
        </div>
    </body> 
</html>