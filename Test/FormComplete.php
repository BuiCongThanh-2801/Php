<html>
<head>
    <html>
    <head>
        <title> Form Đăng ký</title>
        <meta charset="utf-8">
    </head>
<body>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $error=array();
    $data=array();
    if(empty($_POST['username'])){
        $error['username']="Bạn cần cung cấp username";
    }
    else{
        $parttern="/^[A-Za-z0-9]{6,31}$/";
        if(!preg_match ( $parttern, $_POST ['username'])) {
            $error['username']="Username không đúng định dạng";
        }
        else  {
            $username=$_POST['username'];
        }

        // $username=$_POST['username'];
    }
    if(empty($_POST['password'])){
        $error['password']="Bạn cần phải nhập mật khẩu";
    }
    else{
        $password=($_POST['password']);
    }

    if(empty($_POST['confirmPassword'])){
        $error['confirmPassword']="Bạn cần phải nhập mật khẩu";
    }
    else{
        if (strcmp($_POST['confirmPassword'],$_POST['password'])!=0){
            $error['confirmPassword']="Xác nhận mật khẩu không giống nhau";
        }
        else{
            $password=($_POST['confirmPassword']);
        }
    }

    if(empty($_POST['email'])){
        $error['email']="Bạn cần phải nhập email";
    }
    else{
        $partternEmail="/^[a-z][a-z0-9_\.]{5,32}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$/";
        if(!preg_match ( $partternEmail, $_POST ['username'])) {
            $error['email']="Email không đúng định dạng";
        }
        else{
            $email=($_POST['email']);
        }
    }

    if(empty($_POST['address'])){
        $error['address']="Bạn cần phải nhập địa chỉ";
    }
    else{
            $address=($_POST['address']);
    }

    if(empty($_POST['phoneNumber'])){
        $error['phoneNumber']="Bạn cần phải nhập số điện thoại";
    }
    else{
        $partternPhoneNumber="/^(09|01[2|6|8|9])+([0-9]{8})\b$/";
        if(!preg_match ( $partternPhoneNumber, $_POST ['phoneNumber'])) {
            $error['phoneNumber']="Số điện thoại không đúng định dạng";
        }
        else{
            $phoneNumber=($_POST['phoneNumber']);
        }

    }

    if(empty($_POST['idCard'])){
        $error['idCard']="Bạn cần phải nhập số chứng minh nhân dân";
    }
    else{
            $idCard=($_POST['idCard']);
    }

    if(empty($error)){
        echo "$username <br> $password <br> $email <br> $address <br> $phoneNumber <br> $idCard";
    }
}






?>
<form action="" method="post">
    <h2>Form Đăng ký</h2>


    <label for="username">Tài khoản:</label></br>
    <input type="text" name="username" id="username"></br>
    <?php
    if(isset($error['username'])){
        ?>
        <span style="color:red"><?php echo $error['username']; ?></span></br>
    <?php } ?>

    <label for="password">Mật khẩu: </label></br>
    <input type="password" name="password" id="password"><br>
    <?php if(isset($error['password'])){ ?>
        <span style="color:red"><?php echo $error['password']; ?></span></br>
    <?php } ?>

    <label for="confirmPassword">Xác nhận mật khẩu: </label></br>
    <input type="password" name="confirmPassword" id="confirmPassword"><br>
    <?php if(isset($error['confirmPassword'])){ ?>
        <span style="color:red"><?php echo $error['confirmPassword']; ?></span></br>
    <?php } ?>

    <label for="email"> Email </label></br>
    <input type="email" name="email" id="email"><br>
    <?php if(isset($error['email'])){ ?>
        <span style="color:red"><?php echo $error['email']; ?></span></br>
    <?php } ?>

    <label for="address">Địa chỉ </label></br>
    <input type="text" name="address" id="address"><br>
    <?php if(isset($error['address'])){ ?>
        <span style="color:red"><?php echo $error['address']; ?></span></br>
    <?php } ?>

    <label for="phoneNumber">Số điện thoại </label></br>
    <input type="number" name="phoneNumber" id="phoneNumber"><br>
    <?php if(isset($error['phoneNumber'])){ ?>
        <span style="color:red"><?php echo $error['phoneNumber']; ?></span></br>
    <?php } ?>

    <label for="idCard">Số chứng minh nhân dân: </label></br>
    <input type="number" name="idCard" id="idCard" size="10"><br>
    <?php if(isset($error['idCard'])){ ?>
        <span style="color:red"><?php echo $error['idCard']; ?></span></br>
    <?php } ?>
    <input type="submit" name="submit_login" value="Đăng ký">


</form>
</body>
</html>
</head>
</html>