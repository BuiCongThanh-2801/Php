<html>
<head>
    <title> Thông báo ra lỗi Form Đăng nhập</title>
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

        if(empty($error)){
            echo "$username <br> $password";
        }
    }

    
    
    


?>
<form action="" method="post">
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
<input type="submit" name="submit_login" value="Đăng nhập">


</form>
</body>
</html>