<?php
if(isset($_POST['censor'])){
    include '../com.nhinguyenv3.database/connectDB.php';
    $id = $_POST['id'];
    $sql = "update files set censored = 1 where id = '$id'";
    //Thêm lệnh gửi mail duyệt cho author
    if(mysqli_query($conn,$sql)){
        header('Location: ../resources/templates/admin_host_manager.php?response=200');
    } else{
        header('Location: ../resources/templates/admin_host_manager.php?response=404');
    }
    $conn -> close();
} else{
    if(isset($_POST['delete'])){
        include '../com.nhinguyenv3.database/connectDB.php';
        $id = $_POST['id'];
        $sql = "delete from files where id = '$id'";
        //Thêm lệnh gửi mail xoá của author nữa nha
        if(mysqli_query($conn,$sql)){
            header('Location: ../resources/templates/admin_host_manager.php?response=201');
        } else{
            header('Location: ../resources/templates/admin_host_manager.php?response=404');
        }
        $conn -> close();
    }
}
?>