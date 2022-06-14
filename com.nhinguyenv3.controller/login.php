<?php
    if(isset($_POST['login'])){

        include '../com.nhinguyenv3.database/connectDB.php';

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        $query = "select * from users where username = '$username'";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if(password_verify($password,$row["password"])){

                session_start();

                $_SESSION['username'] = $username;
                mysqli_query($con,"insert into logs (action,status,username) values ('Login to web','success','$username')");
                header('Location: ../index.php');
            } else{
                mysqli_query($con,"insert into logs (action,status,username) values ('Login to web','failed cause wrong password','$username')");
                header('Location: ../resources/templates/login.php?response=410');
            }
        } else{
            mysqli_query($con,"insert into logs (action,status,username) values ('Login to web','failed cause no existed account','$username')");
            header('Location: ../resources/templates/login.php?response=409');
        }

        $con -> close();
    }
?>