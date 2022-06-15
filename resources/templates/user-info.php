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
    <link rel="stylesheet" href="../css/common.css">
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
                    $credit = 0;
                    if(isset($_SESSION['username'])){
                        include '../../util/get_user_credit.php';
                        $credit = get_user_credit($_SESSION['username']);
                        echo '
                        <a href="./individual.php" class="text-reset"><i class="fas fa-child fa-3x"></i></a><br>
                        <a href="../../tst/index.php" class="small text-warning">'.$credit.' credit</a><br>
                        <a href="../../util/logout.php" class="text-reset">Đăng xuất</a>
                        ';
                    } else
                        echo '
                        <i class="far fa-user-circle fa-4x"></i><br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item dropdown small">
                                <a href="#" class="nav-link dropdown-toggle text-reset" data-bs-toggle="dropdown">Tài Khoản</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./login.php">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="./register.php">Tạo tài khoản</a></li>
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
                        <li><a class="dropdown-item" href="./beaseller.php">Đăng tải</a></li>
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
    <div class="row">
        <div class="col-lg-4"></div>
            <div class="col-lg-4 card text-center mt-5 bg-success text-white p-3">
                <div>
                    <img class="card-img-top" src="../img/profile.png" alt="Card image" style="width:50%;">
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_GET['username'])){
                            include '../../database/connectDB.php';
                            $username = $_GET['username'];
                            $sql = "select * from users a join infos b on a.username = b.username where a.username = '$username'";
                            $result = mysqli_query($con,$sql);
                            if(mysqli_num_rows($result) > 0){
                                $row = mysqli_fetch_array($result);
                                $chucvu = "thành viên tạm thời vì chưa xác thực";
                                $gioitinh = "nam";
                                if($row["status"] == 1){
                                    $chucvu = "thành viên chính thức vì đã xác thực";
                                }
                                if($row["sex"] == 1){
                                    $gioitinh = "nữ";
                                }
                                echo '
                                <h4 class="card-title">'.$row["username"].'</h4>
                                <p class="card-text">Là thành viên thứ #'.$row["id"].' của server. Hiện tại đang là '.$chucvu.'.</p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="popover" title="Email: '.$row["email"].'" data-bs-content="Họ & tên: '.$row["first_name"].' '.$row["last_name"].', Địa chỉ: '.$row["address"].', Số điện thoại: '.$row["phone_number"].', Tuổi: '.$row["age"].', Giới tính: '.$gioitinh.'">Xem chi tiết</a>
                                ';
                            } else{
                                echo '
                                <i class="fas fa-exclamation-circle text-danger fa-4x"></i>
                                <p>Không tìm thấy đối tượng</p>
                                ';
                            }
                            $con -> close();
                        } else{
                            echo '
                                <i class="fas fa-exclamation-triangle text-danger fa-4x"></i>
                                <p class="text-white">Bạn đang cố thay đổi gì đó ư?</p>
                            ';
                        }
                    ?>
                </div>
            </div>
        <div class="col-lg-4"></div>
    </div>
</div>
<script src="../js/common.js"></script>
</body>
</html>