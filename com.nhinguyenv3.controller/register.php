<?php 
if(isset($_POST['register'])){
    include '../com.nhinguyenv3.database/connectDB.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $query = "select * from users where username = '$username'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0){
        header('Location: ../resources/templates/register.php?response=409');
    } else{
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $authen_token = md5($email.rand(10,9999));

        $sql = "insert into users (username,email,password,authen_token,status) values ('$username','$email', '$password','$authen_token',0);";
        $sql .= "insert into infos (username) values ('$username');";
        $sql .= "insert into balances (username) values ('$username');";
        $sql .= "insert into logs (action, status, username) values ('Register account','verifying','$username')";
        if(mysqli_multi_query($conn, $sql)){
            header('Location: ../resources/templates/register.php?response=201');
        } else{
            header('Location: ../resources/templates/register.php?response=404');
        }
    }
    $conn -> close();
}
?>