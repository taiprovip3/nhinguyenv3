<?php 
    if(isset($_POST['comment'])){

        session_start();

        if(isset($_SESSION['username'])){
            include '../com.nhinguyenv3.database/connectDB.php';
            $content = $_POST['content'];
            $username = $_SESSION['username'];
            $sql = "insert into comments (username, comment) values ('$username','$content')";
            if(mysqli_query($conn,$sql)){
                header('Location: ../resources/templates/comment.php');
            } else{
                header('Location: ../resources/templates/comment.php?response=404');
            }
            $conn -> close();
        } else{
            header('Location: ../resources/templates/comment.php?response=nolog');
        }
    }
?>