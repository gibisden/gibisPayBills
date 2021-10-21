<?php

    require_once '../app/config.php';

    if(isset($_POST['createUser'])){

        $user_code = random_int();
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $status = 1;
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user_code,name,email,phone,status,password) 
        VALUES ('$user_code','$name','$email','$phone','$status','$password',)" or die(mysqli_error($msqli);
        
        $result = mysqli_query($sql,$mysqli);
    }