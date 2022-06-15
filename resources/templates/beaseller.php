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
    <title>nhinguyen.rf.gd | Đăng cai</title>
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
                        <li><a class="dropdown-item" href="#">Đăng tải</a></li>
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
                    <a href="#" class="nav-link active disabled">Đăng tải</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Host file -->
    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 p-4 text-white rounded">
            <form action="../../com.nhinguyenv3.controller/host_file.php" method="post">
            <div class="form-group">
                <label for="type_f" class="text-dark">Chọn loại</label>
                <select class="form-control" name="type_f" id="type_f">
                    <option value="0">File Server</option>
                    <option value="1">Plugin</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name_f" class="text-dark">Tên đại diện</label>
                <input class="form-control" type="text" name="name_f" id="name_f" placeholder="Nhập tên vào đây" required>
            </div>
            <div class="form-group">
                <label for="version_f" class="text-dark">Phiên bản</label>
                <select class="form-control" name="version_f" id="version_f">
                    <option value="1.8">1.8</option>
                    <option value="1.8.1">1.8.1</option>
                    <option value="1.8.2">1.8.2</option>
                    <option value="1.8.3">1.8.3</option>
                    <option value="1.8.4">1.8.4</option>
                    <option value="1.8.5">1.8.5</option>
                    <option value="1.8.6">1.8.6</option>
                    <option value="1.8.7">1.8.7</option>
                    <option value="1.8.8">1.8.8</option>
                    <option value="1.8.9">1.8.9</option>
                    <option value="1.9">1.9</option>
                    <option value="1.9.1">1.9.1</option>
                    <option value="1.9.2">1.9.2</option>
                    <option value="1.9.3">1.9.3</option>
                    <option value="1.9.4">1.9.4</option>
                    <option value="1.10">1.10</option>
                    <option value="1.10.1">1.10.1</option>
                    <option value="1.10.2">1.10.2</option>
                    <option value="1.11">1.11</option>
                    <option value="1.11.1">1.11.1</option>
                    <option value="1.11.2">1.11.2</option>
                    <option value="1.12">1.12</option>
                    <option value="1.12.1">1.12.1</option>
                    <option value="1.12.2">1.12.2</option>
                    <option value="1.13">1.13</option>
                    <option value="1.13.1">1.13.1</option>
                    <option value="1.13.2">1.13.2</option>
                    <option value="1.14">1.14</option>
                    <option value="1.14.1">1.14.1</option>
                    <option value="1.14.2">1.14.2</option>
                    <option value="1.14.3">1.14.3</option>
                    <option value="1.14.4">1.14.4</option>
                    <option value="1.15">1.15</option>
                    <option value="1.15.1">1.15.1</option>
                    <option value="1.15.2">1.15.2</option>
                    <option value="1.16">1.16</option>
                    <option value="1.16.1">1.16.1</option>
                    <option value="1.16.2">1.16.2</option>
                    <option value="1.16.3">1.16.3</option>
                    <option value="1.16.4">1.16.4</option>
                    <option value="1.16.5">1.16.5</option>
                    <option value="1.17">1.17</option>
                    <option value="1.17.1">1.17.1</option>
                    <option value="1.18">1.18</option>
                    <option value="1.18.1">1.18.1</option>
                    <option value="1.18.2">1.18.2</option>
                    <option value="1.19">1.19</option>
                </select>
            </div>
            <div class="form-group">
                <label for="size_f" class="text-dark">Dung lượng</label>
                <input class="form-control" type="number" step="0.1" min="0" name="size_f" id="size_f" placeholder="Nhập vào kích cỡ dung lượng trên ổ đĩa của tệp (đơn vị MB)" required>
            </div>
            <div class="form-group">
                <label for="download_link_f" class="text-dark">Đường dẫn download</label>
                <input class="form-control" type="text" name="download_link_f" id="download_link_f" placeholder="Nhập vào địa chỉ (link/url) download tệp của bạn" required>
            </div>
            <div class="form-group">
                <label for="compressed_type_f" class="text-dark">Chọn loại tệp</label>
                <select class="form-control" name="compressed_type_f" id="compressed_type_f">
                    <option value="Zip">Zip</option>
                    <option value="Winrar">Winrar</option>
                    <option value="Tar">Tar</option>
                    <option value="Folder">Folder</option>
                    <option value="Jar">Jar</option>
                    <option value="Other">Khác</option>
                </select>
            </div>
            <div class="form-group">
                <label for="price_f" class="text-dark">Giá bán</label>
                <input class="form-control" type="number" step="0.1" min="0" name="price_f" id="price_f" placeholder="Nhập giá share hoặc bán (credit), '0' nghĩa là miễn phí" required>
            </div>
            <div class="form-group">
                <label for="description_f" class="text-dark">Mô tả:</label>
                <textarea class="form-control" id="description_f" name="description_f" placeholder="Để rỗng nghĩa là mặc định 'không có mô tả'." maxlength="255"></textarea>
            </div>
            <div class="form-group mb-1">
                <label for="link_video_f" class="text-dark">Link video review (nếu có)</label>
                <input class="form-control" type="text" name="link_video_f" id="link_video_f" placeholder="Nhập vào đường dẫn tới video review file của bạn" required>
            </div>
            <input type="submit" value="Đăng cai" class="btn btn-success btn-lg" name="host_f">
            </form>
        </div>
        <div class="col-lg-1"></div>
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
                    <strong>Thông báo</strong>. Đăng bán thành công. Chờ admin duyệt nhé.
                </div>
                ';
            else{
                if($value == "nolog")
                echo '
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <strong>Vui lòng</strong> đăng nhập. Đây là tính năng dành cho thành viên.
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