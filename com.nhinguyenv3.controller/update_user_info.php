<?php 
    if(isset($_POST['update'])){

        include '../com.nhinguyenv3.database/connectDB.php';

        $id = str_replace("#",'',$_POST['id']);
        $email = trim($_POST['email']);
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $address = trim($_POST['address']);
        $phone_number = trim($_POST['phone_number']);
        $age = trim($_POST['age']);
        $sex = trim($_POST['sex']);

        $stmt = $con -> prepare ("update infos set first_name = ?, last_name = ?, address = ?, phone_number = ?, age = ?, sex = ? where id = ?");
        $stmt -> bind_param("ssssiii", $first_name, $last_name,$address,$phone_number,$age,$sex,$id);

        header('Location: ../resources/templates/individual.php?response=update-info-success');

        $stmt -> execute();
        $stmt -> close();
        $con -> close();
    }
?>