<?php 
if(isset($_POST['delete'])){
    include '../com.nhinguyenv3.database/connectDB.php';
        $mail_id = $_POST['id'];
        $sql = "delete from mailboxs where id = '$mail_id'";
        if(mysqli_query($conn,$sql)){
            header('Location: ../resources/templates/individual.php?response=delete-mail-success');
        } else{
            header('Location: ../resources/templates/individual.php?response=404');
        }
    $conn -> close();
}
?>