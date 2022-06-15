<?php
    include '../../com.nhinguyenv3.database/connectDB.php';
    $sql = "select * from files where type = 0 and censored = 1";
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
        $arr_img = array("a"=>"giphy.gif", "b"=>"ghast.gif", "c"=>"nether.gif", "d"=>"wonder.gif", "e"=>"house.gif");
        $key_img = array_rand($arr_img);
        echo '
            <div class="col-lg-3 p-3 border m-1 flex-fill text-dark rounded">
                <form method="POST" action="../../com.nhinguyenv3.controller/buy_file.php">
                <input type="hidden" name="id" value="'.$row["id"].'" />
                <input type="hidden" name="author" value="'.$row["author"].'" />
                <input type="hidden" name="price" value="'.$row["price"].'" />
                <input type="hidden" name="download_link" value="'.$row["download_link"].'" />
                <input type="hidden" name="file_name" value="'.$row["name"].'" />
                <p class="text-center"><code><b>'.$row["name"].'</b></code></p>
                <img src="../img/'.$arr_img[$key_img].'" alt="IMAGE" class="img-thumbnail" width="100%">
                <div class="d-flex">
                    <div class="col-lg-6">
                        <span>Lượt tải: <i>'.$row["download_count"].'</i></span><br>
                        <span>Phiên bản gốc: <i>'.$row["version"].'</i></span><br>
                        <span>Dung lượng: <i>'.$row["size"].'</i> MB</span><br>
                        <span>Nén loại: <i>'.$row["compress_type"].'</i></span><br>
                        <span>Phát hành: <i>'.$date.' '.$time.'</i></span>
                    </div>
                    <div class="col-lg-6">
                        <p>Tác giả: #<i>'.$row["author"].'</i></p>
                        <p>Giá bán: <i class="text-success">'.$row["price"].'credit</i></p>
                    </div>
                </div>
                <input type="submit" class="btn btn-success btn-sm need-width" value="Mua ngay" name="buy">
                <a href="./detail_file.php?file_id='.$row["id"].'" class="btn btn-outline-dark btn-sm need-width" role="button">Chi tiết</a>
                </form>
            </div>
        ';
    }
    $con -> close();
?>