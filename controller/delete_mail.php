<?php 
if(isset($_POST['delete'])){
    include '../database/connectDB.php';
        $mail_id = $_POST['id'];
        $sql = "delete from mailboxs where id = '$mail_id'";
        if(mysqli_query($con,$sql)){
            header('Location: ../resources/templates/individual.php?response=delete-mail-success');
        } else{
            header('Location: ../resources/templates/individual.php?response=404');
        }
    $con -> close();
}
?>