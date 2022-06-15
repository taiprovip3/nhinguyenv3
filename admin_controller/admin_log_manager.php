<?php
if(isset($_POST['delete-by-id'])){
    include '../database/connectDB.php';
    $id = $_POST['id'];
    $sql = "delete from logs where id = '$id'";
    if(mysqli_query($con,$sql)){
        header('Location: ../resources/templates/admin_log_manager.php?response=201');
    } else{
        header('Location: ../resources/templates/admin_log_manager.php?response=404');
    }
    $con -> close();
} else{
    if(isset($_POST['delete-all-log'])){
        include '../database/connectDB.php';
        $sql = "delete from logs";
        if(mysqli_query($con,$sql)){
            header('Location: ../resources/templates/admin_log_manager.php?response=201');
        } else{
            header('Location: ../resources/templates/admin_log_manager.php?response=404');
        }
        $con -> close();
    }
}
?>