<div>
    <form action="/TrungThanh/DangKy/index.php" method="POST">
        <div class="col-md-7 md-3">
            <label for="first name">First name</label>
            <input type="text" name="firstname" class="form-control" value="<?php echo isset($_POST['btn_Gui'])?$_POST['firstname']:""; ?>">
            <span><?php echo (isset($_POST['btn_Gui']) && isset($err['firstname']))?$err['firstname']:" "; ?></span>
        </div>
        <div class="col-md-7 md-3">
            <label for="last name"> Last name</label>
            <input type="text" name="lastname" class="form-control">
        </div>
        <div class="col-md-7 md-3">
            <label for="username">User name</label>
            <input type="text" name="username" class="form-control">
            <span><?php echo (isset($_POST['btn_Gui']) && isset($err['check_username']))?$err['check_username']:""; ?></span>
        </div>
        <div class="col-md-7 md-3">
            <label for="gender">Gender</label><br>
            <input type="radio" name="gender" value="male" checked>Male<br>
            <input type="radio" name="gender" value="female">Female
        </div>
        <div class="col-md-7 md-3">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control">
            <span><?php echo (isset($_POST['btn_Gui']) && isset($err['email']))?$err['email']:""; ?></span>
        </div>
        <div class="col-md-7 md-3">
            <label for="pass">Pass Word</label>
            <input type="password" name="pass" class="form-control">
        </div>
        <div class="col-md-7 md-3">
            <label for="repasss">Retype Pass Word</label>
            <input type="password" name="repass" class="form-control">
        </div>
        <div class="col-md-2">
            <input type="submit" name="btn_Gui" class="btn btn-info" value="Submit">
        </div>
    </form>
</div>