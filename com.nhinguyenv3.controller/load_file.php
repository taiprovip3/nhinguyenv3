<?php
    include '../../com.nhinguyenv3.database/connectDB.php';
    $sql = "select * from files where type = 0 and censored = 1";
    $result = mysqli_query($conn, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        $day = substr($row["publish_date"],8,2);
        $month = substr($row["publish_date"],5,2);
        $year = substr($row["publish_date"],0,4);
        $time = substr($row["publish_date"],11);
        $date = $day."/".$month."/".$year;
        echo '
            <div class="col-lg-4 p-3 border text-dark rounded">
                <form method="POST" action="../../com.nhinguyenv3.controller/buy_file.php">
                <input type="hidden" name="id" value="'.$row["id"].'" />
                <input type="hidden" name="author" value="'.$row["author"].'" />
                <input type="hidden" name="price" value="'.$row["price"].'" />
                <input type="hidden" name="download_link" value="'.$row["download_link"].'" />
                <input type="hidden" name="file_name" value="'.$row["name"].'" />
                <p class="text-center">File name:<code>'.$row["name"].'</code>&emsp;Seller:<code>#'.$row["author"].'</code>&emsp;<span class="badge bg-danger">$'.$row["price"].' <i class="fas fa-coins"></i></span></p>
                <img src="../img/background.png" alt="IMAGE" width="100%">
                <div class="d-flex">
                    <div class="col-lg-6">
                        <p>Lượt tải: <b>'.$row["download_count"].'</b></p>
                        <p>Phiên bản gốc: <b>'.$row["version"].'</b></p>
                        <p>Dung lượng: <b>'.$row["size"].'</b> MB</p>
                        <p>Nén loại: <b>'.$row["compress_type"].'</b></p>
                        <p>Ngày phát hành: <b>'.$date.' '.$time.'</b></p>
                    </div>
                    <div class="col-lg-6">
                        <p>Mô tả: <b>'.$row["description"].'</b></p>
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-lg need-width" value="Mua ngay" name="buy">
                <a href="./detail_file.php?id='.$row["id"].'" class="btn btn-outline-dark btn-lg need-width" role="button">Chi tiết</a>
                </form>
            </div>
        ';
    }
    $conn -> close();
?>