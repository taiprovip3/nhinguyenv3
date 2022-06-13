<?php
    include '../../com.nhinguyenv3.database/connectDB.php';
    $username = $_SESSION['username'];
    $sql = "select * from user_files a join files b on a.file_id = b.id where a.buyer = '$username' order by b.type";
    $result = mysqli_query($conn, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        if($row["type"] == 0)
            echo '
            <div class="col-lg-2 bg-success text-center rounded m-1 p-2" id="inv">
                <img src="../img/file.png" alt="FILE SERVER" width="25%"><br>
                <code>'.$row["file_name"].'</code><br>
                <a href="'.$row["download_link"].'" target="_blank" class="text-white">Download</a><i class="fas fa-cloud-download-alt text-white"></i>
            </div>
            ';
        else
            echo '
            <div class="col-lg-2 bg-success text-center rounded m-1 p-2" id="inv">
                <img src="../img/plugin.png" alt="PLUGIN" width="25%"><br>
                <code>'.$row["file_name"].' '.$row["version"].'</code><br>
                <a href="'.$row["download_link"].'" target="_blank" class="text-white">Download</a><i class="fas fa-cloud-download-alt text-white"></i>
            </div>
            ';
    }
    $conn -> close();
?>