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
    <title>nhinguyen.rf.gd | Trang chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ad778f42b3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/common.css">
    <link href="./resources/img/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 bg-success" id="header-left">
            <div><img src="./resources/img/grass.png" alt="LOGO" width="100px"></div>
        </div>
        <div class="col-lg-8 bg-success text-white p-3" id="header-middle">
            <img src="https://images.cooltext.com/5605512.png" alt="NHINGUYEN.RF.GD" width="100%" />
        </div>
        <div class="col-lg-2 bg-success text-white" id="header-right">
            <div class="text-center">
                <?php
                    if(isset($_SESSION['username'])){
                        echo '
                        <a href="./resources/templates/individual.php" class="text-reset"><i class="fas fa-child fa-4x"></i></a><br>
                        <a href="./com.nhinguyenv3.util/logout.php" class="text-reset">Đăng xuất</a>
                        ';
                    } else
                        echo '
                        <i class="far fa-user-circle fa-4x"></i><br>
                        <ul class="nav nav-tabs">
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle text-reset" data-bs-toggle="dropdown">Thành viên</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="./resources/templates/login.php">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="./resources/templates/register.php">Đăng ký</a></li>
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
                <li class="nav-item"><a href="#" class="nav-link active">Trang Chủ</a></li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cửa Hàng</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./resources/templates/shopfile.php">Shop files</a></li>
                        <li><a class="dropdown-item" href="./resources/templates/shopplugin.php">Shop plugins</a></li>
                        <li><a class="dropdown-item" href="./resources/templates/beaseller.php">Be a Seller</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Trợ Giúp</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./resources/templates/guide.php">Hướng dẫn</a></li>
                        <li><a class="dropdown-item" href="./resources/templates/contact.php">Liên hệ</a></li>
                        <li><a class="dropdown-item" href="./resources/templates/comment.php">Bình luận</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="./resources/templates/download.php" class="nav-link">Tải Xuống</a>
                </li>
                <li class="nav-item">
                    <a href="./resources/templates/admin.php" class="nav-link">Admin</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Demo -->
    <div class="row">
        <div class="col-lg-12 container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 text-center bg-primary text-white rounded mt-4 mb-4 p-1" id="demo">
                    <h1>GIỚI THIỆU</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display-6">
                    <code><i class="fab fa-wikipedia-w"></i>. <b>Minecraft Wikipedia</b>&emsp;<span class="text-white badge bg-danger">1</span></code>
                    <p class="small"><i>- Minecraft là một trò chơi điện tử độc lập trong một thế giới mở với phong cách sandbox, được phát hành vào năm 2009 bởi lập trình viên người Thụy Điển Markus "Notch" Persson và sau đó được phát triển và phát hành bởi Mojang Studio. Khả năng sáng tạo và xây dựng Minecraft cho phép người chơi xây dựng các công trình bằng cách kết hợp các khối lập phương kết cấu trong một thế giới 3D. Các hoạt động khác trong game bao gồm tìm kiếm, thu thập tài nguyên, chế tạo và chiến đấu. <a href="https://vi.wikipedia.org/wiki/Minecraft" target="_blank"><i class="fas fa-external-link"></i></a></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display-6">
                    <code><i class="fab fa-cpanel"></i>. <b>nhinguyen channel</b>&emsp;<span class="text-white badge bg-warning">2</span></code>
                    <p class="small"><i>- Kênh youtube được thành lập từ năm 2013 với những nội dung bình thường của 1 con người bình thường. Hiện tại kênh đã chuyển sang làm content về minecraft liên quan đến server và file chủ yếu dành cho các configer và admin tham khảo. Hiện tại mình chỉ có một kệnh YT duy nhất là : "nhinguyen". Các file từ video khác có thể do reupload lại từ mình.</i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display-6">
                    <code><i class="fas fa-globe-americas"></i>. <b>Website Official</b>&emsp;<span class="text-white badge bg-primary">3</span></code>
                    <p class="small"><i>- Trải qua nhiều lần cập nhật phiên bản giao diện và ip cũ grass.rf.gd giờ đây website sẽ lấy ip mới chính thức là nhinguyen.rf.gd để đồng bộ với tên channel cho các bạn nhớ đến nó dễ dàng. Admin website này là 1 cá nhân (1 thành viên). Admin mong muốn chia sẽ content các bạn có cùng ý tưởng về server minecraft, hỗ trợ các bạn các tài nguyên cũng như các bạc tự chia sẽ cho nhau trong việc phát triển máy chủ minecraft..</i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 display-6">
                    <code><i class="fas fa-server"></i>. <b>Máy chủ Grassmc.com</b>&emsp;<span class="text-white badge bg-success">4</span></code>
                    <p class="small"><i>- Server minecraft này đã trải qua hơn 10 season, mặc dù chỉ là 1 server con trong 1 rừng server minecraft Việt Nam. Nhưng đã thu lại những thành tựu đáng nể. Máy chủ chính là skyblock và rễ là các server, cũng từng có vài lần update ra minigame nhưng đã thất bại. Hiện tại mình cần tuyển 1 số lượng admin (configer) từ 3-4 bạn để cùng nhau xây dựng 1 server lớn mạnh, lợi ích chia đều. Chi tiết hãy xem hướng dẫn trên.</i></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>