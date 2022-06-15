<?php
    function get_user_credit($username){
        include '../../database/connectDB.php';
        $default = 0;
        $sql = "select credit from balances where username = '$username'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $default = $row[0];
        }
        $con -> close();
        return $default;
    }
    function get_user_credit_by_index($username){
        include './database/connectDB.php';
        $default = 0;
        $sql = "select credit from balances where username = '$username'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $default = $row[0];
        }
        $con -> close();
        return $default;
    }
?>