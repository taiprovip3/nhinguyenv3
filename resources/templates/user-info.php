<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="nhinguyen.rf.gd mạng lưới máy chủ hàng đầu việt nam. Đa năng, toàn diện và hoàn toàn miễn phí">
    <title>nhinguyen.rf.gd | Hướng dẫn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/common.css?i=1">
    <link href="../img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 bg-success" id="header-left">
            <div><img src="../img/grass.png" alt="LOGO" width="100px"></div>
        </div>
        <div class="col-lg-8 bg-success text-white p-3" id="header-middle">
            <img src="https://images.cooltext.com/5605512.png" alt="NHINGUYEN.RF.GD" width="100%" />
        </div>
        <div class="col-lg-2 bg-success text-white" id="header-right">
            <div class="text-center">
                <?php
                    if(isset($_SESSION['username'])){
                        echo '
                        <a href="./individual.php" class="text-reset"><i class="fas fa-child fa-4x"></i></a><br>
                        <a href="../../com.nhinguyenv3.util/logout.php" class="text-reset">Đăng xuất</a>
                        ';
                    } else
                        echo '
                        <i class="far fa-user-circle fa-4x"></i><br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle text-reset" data-bs-toggle="dropdown">Thành viên</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./login.php">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="./register.php">Đăng ký</a></li>
                                </ul>
                            </li>
                        </ul>
                        ';
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-3" id="nav">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a href="../../index.php" class="nav-link">Trang Chủ</a></li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cửa Hàng</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./shopfile.php">Shop files</a></li>
                        <li><a class="dropdown-item" href="./shopplugin.php">Shop plugins</a></li>
                        <li><a class="dropdown-item" href="./beaseller.php">Be a Seller</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trợ Giúp</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./guide.php">Hướng dẫn</a></li>
                        <li><a class="dropdown-item" href="./contact.php">Liên hệ</a></li>
                        <li><a class="dropdown-item" href="./comment.php">Bình luận</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="./download.php" class="nav-link">Tải Xuống</a>
                </li>
                <li class="nav-item">
                    <a href="./admin.php" class="nav-link">Admin</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active disabled">Thông tin Cá nhân</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- user-info -->
    <!--
        <div class="col-lg-8 mt-5 p-3 small border text-center rounded"> 
            <img src="../img/profile.png" alt="ICON" width="100px">
            <p>taiproduaxe#1</p>
            <label for="email"><b>Email</b></label>
            <p id="email">taito1doraemon@gmail.com</p>
            <label for="status"><b>Chức vụ</b></label>
            <p id="status">thành viên tạm thời</p>
            <label for="name"><b>Họ tên</b></label>
            <p id="name">Phan Tấn Tài</p>
            <label for="email"><b>Địa chỉ</b></label>
            <p id="email">60/122, KP8 Phường TCH, Quận 12, TPHCM, đường Huỳnh Thị Hai</p>
            <label for="email"><b>Số điện thoại</b></label>
            <p id="email">+84 0338188506</p>
            <label for="email"><b>Tuổi</b></label>
            <p id="email">21</p>
            <label for="email"><b>Giới tính</b></label>
            <p id="email">nam</p>
        </div>
    -->
    <div class="row">
        <div class="col-lg-2"></div>
            <?php
                if(isset($_GET['username'])){
                    include '../../com.nhinguyenv3.database/connectDB.php';
                    $username = $_GET['username'];
                    $sql = "select * from users a join infos b on a.username = b.username where a.username = '$username'";
                    $result = mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) > 0){
                        $row = mysqli_fetch_array($result);
                        $chucvu = "thành viên tạm thời";
                        $gioitinh = "nam";
                        if($row["status"] == 1){
                            $chucvu = "thành viên chính thức";
                        }
                        if($row["sex"] == 1){
                            $gioitinh = "nữ";
                        }
                        echo '
                        <div class="col-lg-8 mt-5 p-3 small border text-center rounded"> 
                            <img src="../img/profile.png" alt="ICON" width="100px">
                            <p>'.$row["username"].'#'.$row["id"].'</p>
                            <label for="email"><b>Email</b></label>
                            <p id="email">'.$row["email"].'</p>
                            <label for="status"><b>Chức vụ</b></label>
                            <p id="status">'.$chucvu.'</p>
                            <label for="name"><b>Họ tên</b></label>
                            <p id="name">'.$row["first_name"].' '.$row["last_name"].'</p>
                            <label for="address"><b>Địa chỉ</b></label>
                            <p id="address">'.$row["address"].'</p>
                            <label for="phone_number"><b>Số điện thoại</b></label>
                            <p id="phone_number">+84 '.$row["phone_number"].'</p>
                            <label for="age"><b>Tuổi</b></label>
                            <p id="age">'.$row["age"].'</p>
                            <label for="sex"><b>Giới tính</b></label>
                            <p id="sex">'.$gioitinh.'</p>
                        </div>
                        ';

                    } else{
                        echo '
                        <div class="col-lg-8 text-center mt-5 p-5">
                        <i class="fas fa-exclamation-circle text-warning fa-5x"></i>
                        <p>Không tìm thấy đối tượng</p>
                        </div>
                        ';
                    }
                    $conn -> close();
                } else{
                    echo '
                        <div class="col-lg-8 text-center text-danger mt-5 p-5">
                        <i class="fas fa-exclamation-triangle fa-5x"></i>
                        <p class="text-dark">Bạn đang cố thay đổi gì đó ư?</p>
                        </div>
                    ';
                }
            ?>
        <div class="col-lg-2"></div>
    </div>

</div>
</body>
</html>