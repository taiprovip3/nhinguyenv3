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
                    <a href="#" class="nav-link active">Tải Xuống</a>
                </li>
                <li class="nav-item">
                    <a href="./admin.php" class="nav-link">Admin</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Download -->
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-around flex-wrap mt-5">
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://titan.mythicmc.org/" target="_blank">Titan Minecraft Launcher<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.oracle.com/java/technologies/javase/javase8-archive-downloads.html" target="_blank">JRE8 + JDK8 <i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.dropbox.com/sh/z8lhwjbzjtqaqdl/AADVeWJsv5OoHpxXxHhzgyVUa?dl=1" target="_blank">ISRG <i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.google.com/drive/download/" target="_blank">Sync Google Driver x64<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://openvpn.net/download-open-vpn/" target="_blank">Open VPN Connector x64<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://download.com.vn/winrar-64-bit-28223" target="_blank">Winrar x64<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.dropbox.com/s/osgwu9sre9zbc4m/Internet%20Download%20Manager%206.39.2.exe?dl=1" target="_blank">IDM x64 <i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://ngrok.com/download" target="_blank">Ngrok x64<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://code.visualstudio.com/download" target="_blank">VS code<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.apachefriends.org/download.html" target="_blank">Xampp<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://playit.gg/download" target="_blank">Playit.gg<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://docs.google.com/document/d/1xsyk4CzEJxQQzX4LFQ_LyZy_eQBCY8Kb/edit" target="_blank">Data.xml<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://taimienphi.vn/download-free-mouse-auto-clicker-15522/382-phien-ban" target="_blank">Free Auto Clicker 3.8.6<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://git-scm.com/downloads" target="_blank">Git 2.35.1.2<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://git-lfs.github.com/" target="_blank">Git LFS 3.1.2<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://notepad-plus-plus.org/downloads/" target="_blank">Notepad++ 8.9.1<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://download.com.vn/unikey-6799" target="_blank">Unikey 4.3 rc5<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://docs.microsoft.com/en-us/cpp/windows/latest-supported-vc-redist?view=msvc-170" target="_blank">Visual C++ Redistributable<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.bluestacks.com/vi/bluestacks-5.html?utm_source=Google&utm_medium=CPC&utm_campaign=aw-ded-vi-bluestacks5-brand&gclid=CjwKCAjwnZaVBhA6EiwAVVyv9BNQUnX3j7LjoEvVeQtE0RVOA2FMzKwCd_IWEjxjSpyUG2-uFvYigBoCg9cQAvD_BwE" target="_blank">BlueStack 5<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://developer.android.com/studio" target="_blank">Android Studio<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://www.eclipse.org/downloads/packages/" target="_blank">Eclipse for EE<i class="fas fa-download"></i></a>
            </div>
            <div class="col-lg-2 flex-fill border text-center mt-3 mb-3 p-3">
                <a href="https://github.com/taiprovip3/my-vps" target="_blank">Github my-vps<i class="fas fa-download"></i></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>