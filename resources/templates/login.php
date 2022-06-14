<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="nhinguyen.rf.gd mạng lưới máy chủ hàng đầu việt nam. Đa năng, toàn diện và hoàn toàn miễn phí">
    <title>nhinguyen.rf.gd | Đăng nhập</title>
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
                        header('Location: ../../index.php');
                    } else
                        echo '
                        <i class="far fa-user-circle fa-4x"></i><br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle text-reset" data-bs-toggle="dropdown">Thành viên</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
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
                    <a href="../templates/download.php" class="nav-link">Tải Xuống</a>
                </li>
                <li class="nav-item">
                    <a href="../templates/admin.php" class="nav-link">Admin</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active disabled">Đăng nhập Thành viên</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Login -->
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 mt-5">
            <form action="../../com.nhinguyenv3.controller/login.php" method="POST" style="display: inline;">
            <div class="form-floating mb-3 mt-3">
                <input type="text" class="form-control" id="username" placeholder="Nhập vào Tên đăng nhập" name="username" required>
                <label for="username">Tên đăng nhập <span class="text-danger">(*)</span></label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <input type="password" class="form-control" id="password" placeholder="Nhập vào Mật khẩu" name="password">
                <label for="password" required>Mật khẩu <span class="text-danger">(*)</span></label>
            </div>
            <button type="submit" class="btn btn-success btn-lg" name="login">Đăng nhập</button>
            </form>&emsp;Chưa có tài khoản?
            <a href="./register.php">Đăng ký</a>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<style>
    #announcer{
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>
<div id="announcer">
    <?php
        if(isset($_GET['response'])){
            $value = $_GET['response'];
            if($value == 409)
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Tài khoản chưa được đăng ký.</strong>
                </div>
                ';
            else{
                if($value == 410)
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Sai mật khẩu.</strong>
                </div>
                ';
                if($value == 404)
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Thất bại!</strong> Đã xảy ra lỗi không thể xác định.
                </div>
                ';
            }
        }
    ?>
</div>
</body>
</html>