<?php
    if(isset($_POST['host_f'])){
        session_start();
        if(isset($_SESSION['username'])){
            include '../database/connectDB.php';
            $file_id = rand(1, 2147483648);
            $username = $_SESSION['username'];
            $type_f = $_POST['type_f'];
            $name_f = $_POST['name_f'];
            $version_f = $_POST['version_f'];
            $size_f = $_POST['size_f'];
            $download_link_f = $_POST['download_link_f'];
            $compressed_type_f = $_POST['compressed_type_f'];
            $price_f = $_POST['price_f'];
            $description_f = $_POST['description_f'];
            $link_video_f = $_POST['link_video_f'];
            $sql = "insert into files (id,name,price,version,size,compress_type,description,download_link,author,type) values ($file_id,'$name_f',$price_f,'$version_f',$size_f,'$compressed_type_f','$description_f','$download_link_f','$username',$type_f);";
            $sql .= "insert into detail_files (description,link_video,present_image,file_id) values ('$description_f','$link_video_f','present.png',$file_id);";
            $sql .= "insert into logs (action,status,username) values ('Đăng cai tệp loại $type_f','waiting for censor','$username')";
            if(mysqli_multi_query($con,$sql)){
                header('Location: ../resources/templates/beaseller.php?response=201');
            } else{
                header('Location: ../resources/templates/beaseller.php?response=404');
            }
        } else{
            header('Location: ../resources/templates/beaseller.php?response=nolog');
        }
        $con -> close();
    }
?>