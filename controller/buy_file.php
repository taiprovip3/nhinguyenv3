<?php
    if(isset($_POST['buy'])){

        session_start();//thẻ form ko kế thừa thuộc tính include từ class cha
        $download_link = $_POST['download_link'];
        $price = $_POST['price'];

        if(!isset($_SESSION['username']) && $price <= 0){
            header('Location: '.$download_link);
            return;
        }else{
            if(!isset($_SESSION['username']) && $price > 0){
                header('Location: ../resources/templates/shopfile.php?response=nolog');
            } else{//TH có đăng nhập

                include '../database/connectDB.php';
                $author = $_POST['author'];
                $username = $_SESSION['username'];
                if($author == $username){//TH tự mua file chính mình
                    header('Location: ../resources/templates/shopfile.php?response=yourself');
                } else{
                    $sql = "select credit from balances where username = '$username'";
                    $result = mysqli_query($con, $sql);
                    $row = mysqli_fetch_array($result);
                    $user_credit = $row[0];
                    if($user_credit < $price){//TH ko đủ credit
                        header('Location: ../resources/templates/shopfile.php?response=noeng');
                    } else{//TH đủ credit để mua
                        $id = $_POST['id'];
                        $file_name = $_POST['file_name'];
    
                        $query = "select * from user_files where buyer = '$username' and file_id = '$id'";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result) <= 0){
                            $sql = "update balances set credit = credit - $price where username = '$username';";
                            $sql .= "update balances set credit = credit + $price where username = '$author';";
                            $sql .= "insert into user_files (file_name,download_link,buyer,file_id) values ('$file_name','$download_link','$username',$id);";
                            $sql .= "insert into logs (action,status,username) values ('bought file from $author','success', '$username')";
                            if(mysqli_multi_query($con, $sql)){
                                header('Location: ../resources/templates/shopfile.php?response=201');
                            } else{
                                header('Location: ../resources/templates/shopfile.php?response=404');
                            }
                        } else{
                            header('Location: ../resources/templates/shopfile.php?response=conflict');
                        }
                    }
                }
            }
        }
        $con -> close();
    }
?>