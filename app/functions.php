<?php

    #Redirect users to login page is session is not started.

    if(empty($_SESSION[id])){
        header('Location: ./login.php');
    }



    function company($mysqli){
        while($row = mysqli_query($sql, $mysqli)){
            extract($row);
        }
    }