<?php
if(isset($_POST['censor'])){
    include '../database/connectDB.php';
    $id = $_POST['id'];
    $sql = "update files set censored = 1 where id = '$id'";
    //Thêm lệnh gửi mail duyệt cho author
    if(mysqli_query($con,$sql)){
        header('Location: ../resources/templates/admin_host_manager.php?response=200');
    } else{
        header('Location: ../resources/templates/admin_host_manager.php?response=404');
    }
    $con -> close();
} else{
    if(isset($_POST['delete'])){
        include '../database/connectDB.php';
        $id = $_POST['id'];
        $sql = "delete from files where id = '$id'";
        //Thêm lệnh gửi mail xoá của author nữa nha
        if(mysqli_query($con,$sql)){
            header('Location: ../resources/templates/admin_host_manager.php?response=201');
        } else{
            header('Location: ../resources/templates/admin_host_manager.php?response=404');
        }
        $con -> close();
    }
}
?>