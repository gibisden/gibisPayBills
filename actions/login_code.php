<?php

    require_once '../app/config.php';

    if(isset($_POST['loginUser'])){

        $email = $_POST['email'];
        $status = 1;
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$email' " or die(mysqli_error($mysqli));

        $result = mysqli_query($sql,$msqli);

        if($result){
            header('Location: ../index.php');
        } else {
            header('Location: ../login.php');
        }
    }