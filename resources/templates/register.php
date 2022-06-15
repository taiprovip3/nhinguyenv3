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
    <title>nhinguyen.rf.gd | Đăng ký</title>
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
                    <a href="#" class="nav-link active disabled">Đăng Ký Tài Khoản</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Demo -->
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8 mt-5">
            <form action="/nhinguyenv3/com.nhinguyenv3.controller/register.php" method="POST">
            <div class="form-floating mb-3 mt-3">
                <span class="text-danger hide" id="wrong-username"><i class="fas fa-times"></i> Tên đăng nhập chưa hợp lệ!</span>
                <input type="text" class="form-control" id="username" placeholder="Nhập vào Tên đăng nhập" name="username" required>
                <label for="username">Tên đăng nhập <span class="text-danger">(*)</span></label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <span class="text-danger hide" id="wrong-password"><i class="fas fa-times"></i> Mật khẩu chưa hợp lệ!</span>
                <input type="password" class="form-control" id="password" placeholder="Nhập vào Mật khẩu" name="password">
                <label for="password" required>Mật khẩu <span class="text-danger">(*)</span></label>
            </div>
            <div class="form-floating mt-3 mb-3">
                <span class="text-danger hide" id="wrong-repassword"><i class="fas fa-times"></i> Nhập lại mật khẩu chưa hợp lệ!</span>
                <input type="password" class="form-control" id="repassword" placeholder="Nhập vào Mật khẩu" name="repassword">
                <label for="repassword" required>Nhập lại Mật khẩu <span class="text-danger">(*)</span></label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <input type="email" class="form-control" id="email" placeholder="Nhập vào địa chỉ email" name="email">
                <label for="email">Địa chỉ Email</label>
            </div>
            <button type="submit" class="btn btn-success btn-lg hide" name="register">Có thể Đăng ký</button>
            </form>
            <button class="btn btn-primary btn-lg" id="register-fake">Đăng ký</button>&emsp;Đã có tài khoản?
            <a href="./login.php">Đăng nhập</a>
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<div id="announcer">
    <?php
        if(isset($_GET['response'])){
            $value = $_GET['response'];
            if($value == 201){
                echo '
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Success!</strong> Đăng ký tài khoản thành công.
                </div>
                ';
                echo '
                <script>
                jQuery(document).ready(function(){
                    setTimeout(() => {
                        window.location.href = "./login.php";
                    }, 1000);
                });
                </script>
                ';
            }
            else{
                if($value == 409)
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Thất bại!</strong> Tài khoản đã có người sử dụng.
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
<script>
$(document).ready(function(){
    $("#register-fake").click(function(){
        var valid_username = false;
        var valid_password = false; 
        var valid_repassword = false;

        var username = $("#username").val();
        var password = $("#password").val();
        var repassword = $("#repassword").val();

        var regex_username = /^[a-z0-9_.]{3,}$/;
        var regex_password = /^[a-zA-Z0-9]{8,}$/;

        if(regex_username.test(username)){
            valid_username = true;
            $("#wrong-username").hide();
        } else{
            valid_username = false;
            $("#wrong-username").show();
        }

        if(regex_password.test(password)){

            valid_password = true;
            $("#wrong-password").hide();

            if(repassword === password){
                valid_repassword = true;
                $("#wrong-repassword").hide();
            } else{
                valid_repassword = false;
                $("#wrong-repassword").show();
            }
        } else{
            valid_password = false;
            $("#wrong-password").show();
        }

        if(valid_username && valid_password && valid_repassword){
            $(this).attr('disabled', true);
            $(this).html('<span class="spinner-grow spinner-grow-sm"></span>Loading...');
            setTimeout(() => {
                $(this).hide();
                $("button[name='register']").show();
                $("input").prop('readonly', true);
            }, 1500);
        }
    });
});
</script>
</body>
</html>