<?php 
    include "ketNoi/controls.php";
    $variable=new controls;
    $result=$variable->Select();
?>
<html>
    <title>Student</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <body>
        <div class="content"></div>
        <p><a href="add.php" class="btn btn-info">ADD STUDENT</a></p>
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
                <?php foreach($result as $value): ?>
                <tr>
                    <td scope="row"><?php echo $value[0];?></td>
                    <td><?php echo $value[1];?></td>
                    <td><?php echo $value[2];?></td>
                    <td><?php echo $value[3];?></td>
                    <td>
                        <a href="update.php" class="btn btn-info">Update</a>
                        <a href="delete.php" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>