<?php
    include '../../com.nhinguyenv3.database/connectDB.php';
    $sql = "select * from files where type = 1 and censored = 1";
    $result = mysqli_query($con, $sql);
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
            <div class="col-lg-4 p-2 border bg-dark text-white rounded">
                <form method="POST" action="../../com.nhinguyenv3.controller/buy_file.php">
                <input type="hidden" name="id" value="'.$row["id"].'" />
                <input type="hidden" name="author" value="'.$row["author"].'" />
                <input type="hidden" name="price" value="'.$row["price"].'" />
                <input type="hidden" name="download_link" value="'.$row["download_link"].'" />
                <input type="hidden" name="file_name" value="'.$row["name"].'" />
                <p class="text-center">'.$row["name"].'</code></p>
                <img src="../img/background.png" alt="IMAGE" width="100%">
                <div class="d-flex">
                    <div class="col-lg-4">
                        <p>Lượt tải: <b>'.$row["download_count"].'</b></p>
                        <p>Phiên bản gốc: <b>'.$row["version"].'</b></p>
                        <p>Dung lượng: <b>'.$row["size"].'</b> MB</p>
                        <p>Nén loại: <b>'.$row["compress_type"].'</b></p>
                        <p>Ngày phát hành: <b>'.$date.' '.$time.'</b></p>
                    </div>
                    <div class="col-lg-4 small">
                        <p>Mô tả: '.$row["description"].'</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Tác giả: #<b>'.$row["author"].'</b></p>
                        <p>Giá bán: <b class="text-success">'.$row["price"].'</b>credit</p>
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-sm need-width" value="Mua ngay" name="buy">
                <a href="./detail_file.php?plugin_id='.$row["id"].'" class="btn btn-outline-light btn-sm text-danger need-width" role="button">Chi tiết</a>
                </form>
            </div>
        ';
    }
    $con -> close();
?>