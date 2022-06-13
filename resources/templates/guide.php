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
                        <li><a class="dropdown-item" href="#">Hướng dẫn</a></li>
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
                    <a href="#" class="nav-link active disabled">Hướng dẫn</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Guide -->
    <div class="row">
        <div class="col-lg-12 p-3">
            <p><i class="fas fa-exclamation-circle text-warning"></i><i>Các bạn vui lòng làm đúng theo hướng dẫn các bước, có hình ảnh kèm theo.</i></p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 bg-primary mb-3 p-3 text-white text-center rounded">
                    <h2>Hướng dẫn tải file miễn phí</h2>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><b>Bước 1:</b> Truy cập địa chỉ shop file nhinguyen.rf.gd. <a href="./shopfile.php">Tại đây<i class="fas fa-link"></i></a></p>
                    <p><b>Bước 2:</b> Lựa chọn file tuỳ thích và lưu ý sau:</p>
                    <ul>
                        <li>Các tệp có giá 0 credit nghĩa là miễn phí.</li>
                        <li>Tệp miễn phí có thể mua ngay mà không cần đăng nhập.</li>
                        <li>Tệp miễn phí có giá trị tải tức thời và không lưu vào túi đồ của anonymous.</li>
                    </ul>
                    <ul>
                        <li>Đối với các tệp có giá đăng cai > 0 credit.</li>
                        <li>Buộc bạn phải đăng nhập để mua.</li>
                        <li>Sau khi mua, tài nguyên sẽ chuyển vào túi cá nhân.</li>
                        <li>Người đăng cai (seller) sẽ nhận được lượng credit tương ứng <u>(không có chiết khấu % nào cả)</u></li>
                    </ul>
                    <p><b>Bước 3:</b> Sau khi mua tài nguyên, bạn có thể nhấp kiểm tra</p>
                    <img src="../img/guide_1.PNG" alt="GUIDE" width="40%">
                    <p>Hoặc nhấp vào icon cá nhân để đến trang cá nhân.</p>
                    <img src="../img/guide_2.PNG" alt="GUIDE" width="40%">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 bg-primary mb-3 p-3 text-white text-center rounded">
                    <h2>Hướng dẫn trở thành người bán</h2>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><b>Bước 1:</b> Truy cập địa chỉ be a seller nhinguyen.rf.gd. <a href="./beaseller.php">Tại đây<i class="fas fa-link"></i></a></p>
                    <p><b>Bước 2:</b> Đăng nhập tài khoản thành viên (nếu chưa).</p>
                    <p><b>Bước 3:</b> Upload tài nguyên chuẩn bị đăng cai của bạn lên các media trên mạng. Đề xuất:</p>
                    <ul>
                        <li><a href="https://drive.google.com/drive" target="_blank">Google Drive</a></li>
                        <li><a href="https://www.mediafire.com/" target="_blank">Mediafire</a></li>
                        <li><a href="https://www.dropbox.com/" target="_blank">Dropbox</a></li>
                        <li>...</li>
                        <li>Các bạn hãy sử dụng các media cloud nào quen thuộc với bạn và có tạo đường dẫn công khai để khi tài nguyên của bạn đăng cai, người khác có thể theo đường dẫn này để tải xuống.</li>
                    </ul>
                    <p><b>Bước 4:</b> Chuẩn bị url download của tệp chuẩn bị đăng cai.</p>
                    <p><b>Bước 5:</b> Điền đầy đủ thông tin vào các trường đăng cai gói tài nguyên.</p>
                    <img src="../img/guide_3.PNG" alt="GUIDE" width="40%">
                    <p><b>Bước 6:</b> Chọn đăng tải và chờ admin duyệt <i>Lưu ý</i>:</p>
                    <ul>
                        <li>Trường hợp đăng cai tài nguyên tào lao sẽ không được duyệt và bị xoá acc.</li>
                        <li>Đăng cai các tài nguyên nhằm mục đích chia sẽ miễn phí nên khuyến khích các bạn set credit 0$</li>
                        <li>Tài nguyên được duyệt hoặc không sẽ được thông báo qua hòm thư cá nhân của bạn.</li>
                        <li>Admin sẽ cố gắng online duyệt trong thời gian ngắn nhất. Trường hợp admin quá lâu không phản hồi vui lòng <a href="./contact.php">Liên hệ</a> qua các mạng xã hội.</li>
                        <li>Tài nguyên có giá >0 credit khi có ai đó mua bạn sẽ nhận được lượng credit hoa hồng tương ứng (không bị chiết khấu %).</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 bg-primary mb-3 p-3 text-white text-center rounded">
                    <h2>Cách nạp credit bằng thẻ cào điện thoại</h2>
                </div>
                <div class="col-lg-2"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <p><b>Bước 1:</b> Truy cập nơi nạp credit của website. <a href="../../tst/index.php">Tại đây<i class="fas fa-link"></i></a></p>
                    <p><b>Bước 2:</b> Điền đầy đủ thông tin vào các trường:</p>
                    <img src="../img/guide_4.PNG" alt="GUIDE" width="40%">
                    <p><b>Bước 3:</b> Nhấp nạp ngay và chờ đợi khoản 2~3 phút để xử lý api.</p>
                    <ul><i>Lưu ý:</i>
                        <li>Vui lòng nhập/chọn đúng mệnh giá, loại thẻ. Trường hợp sai sót sẽ mất thể và admin không chịu trách nhiệm nên bạn hãy cẩn thận 1 chút.</li>
                        <li>Trường hợp thẻ đã nạp thành công và chờ không thấy phản hồi cũng như credit không tăng vui lòng chụp ảnh và liên hệ tới admin. Có lịch sử ghi nhận lại nên bạn hãy yên tâm.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>