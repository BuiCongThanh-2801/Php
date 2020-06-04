<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $error=array();
        if(empty($_POST['username'])){
            $error['username']="Bạn cần cung cấp username";
        }
        else{
            $username=($_POST['username']);
        }
        if(empty($_POST['password'])){
            $error['password']="Bạn cần phải nhập mật khẩu";
        }
        else{
            $password=($_POST['password']);
        }
    }

    if(empty($error)){
        echo "$username <br> $password";
    }
    // echo "Your accout is: " .$_POST["username"]."<br>"."";
    // echo "Your password is: ".$_POST["password"]."";
    


?>