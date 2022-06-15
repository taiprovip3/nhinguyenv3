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
    <title>nhinguyen.rf.gd | Shop file</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/announcer.css">
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
                        include '../../com.nhinguyenv3.util/get_user_credit.php';
                        $credit = get_user_credit($_SESSION['username']);
                        echo '
                        <a href="./individual.php" class="text-reset"><i class="fas fa-child fa-3x"></i></a><br>
                        <a href="../../tst/index.php" class="small text-warning">'.$credit.' credit</a><br>
                        <a href="../../com.nhinguyenv3.util/logout.php" class="text-reset">Đăng xuất</a>
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
                        <li><a class="dropdown-item" href="#">Shop files</a></li>
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
                    <a href="#" class="nav-link active disabled">Shop Files</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Shop file -->
    <style>
        .need-width{
            width: 48.9%;
        }
    </style>
    <div class="row">
        <div class="col-lg-12 p-3">
            <div class="d-flex flex-wrap">
                <?php include '../../com.nhinguyenv3.controller/load_file.php'; ?>
            </div>
        </div>
    </div>
</div>
<div id="announcer">
    <?php
        if(isset($_GET['response'])){
            $value = $_GET['response'];
            if($value == 201)
                echo '
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Thành công.</strong> Đã chuyển vào túi <a href="./individual.php" class="alert-link">kiểm tra ngay</a>
                </div>
                ';
            else{
                if($value == "nolog")
                    echo '
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Chưa đăng nhập.</strong> Đăng nhập <a href="./login.php">tại đây</a>
                    </div>
                    ';
                if($value == "yourself"){
                    echo '
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        <strong>Bạn không thể</strong> tự quay tay.
                    </div>
                    ';
                }
                if($value == "noeng")
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Thất bại.</strong> Bạn không có đủ credit để mua.
                </div>
                ';
                if($value == "conflict")
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Tệp này</strong> đã có sẵn trong túi bạn. <a href="./individual.php" class="text-reset">Đến kiểm tra</a>
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