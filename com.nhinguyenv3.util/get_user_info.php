<?php
    $id = "";
    $emil = "";
    $first_name = "";
    $last_name = "";
    $address = "";
    $phone_number = "";
    $age = "";
    $sex = "";
    function get_user_info($username){
        include '../../com.nhinguyenv3.database/connectDB.php';
        $sql = "select * from infos a join users b on a.username = b.username where a.username = '$username'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $GLOBALS['id'] = $row["id"];
        $GLOBALS['email'] = $row["email"];
        $GLOBALS['first_name'] = $row["first_name"];
        $GLOBALS['last_name'] = $row["last_name"];
        $GLOBALS['address'] = $row["address"];
        $GLOBALS['phone_number'] = $row["phone_number"];
        $GLOBALS['age'] = $row["age"];
        $GLOBALS['sex'] = $row["sex"];
        $con -> close();
    }
?>