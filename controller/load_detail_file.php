<?php
if(isset($_GET['file_id'])){
    include '../../database/connectDB.php';
    $file_id = $_GET['file_id'];
    $sql = "select * from files a join detail_files b on b.file_id = a.id where b.file_id = '$file_id' and a.type = 0";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo '
            <label><b>Tên file:</b></label>
            <p>'.$row["name"].'</p>
            <hr>
            <label><b>Mô tả chi tiết:</b></label>
            <p>'.$row["description"].'</p>
            <hr>
            <label><b>Link video review:</b></label>
            <p>'.$row["link_video"].'</p>
            <hr>
            <label><b>Ảnh mô tả:</b></label><br>
            <img src="'.$row["present_image"].'" alt="ẢNH MÔ TẢ">
        ';
    } else{
        echo '
            <p><i class="fas fa-exclamation-triangle text-danger"></i> Chưa / không có bất kì mô tả chi tiết nào cho sản phẩm này!</p>&emsp;<a href="./shopfile.php">Quay lại</a>
        ';
    }
    $con -> close();
}
if(isset($_GET['plugin_id'])){
    include '../../database/connectDB.php';
    $file_id = $_GET['plugin_id'];
    $sql = "select * from files a join detail_files b on b.file_id = a.id where b.file_id = '$file_id' and a.type = 1";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo '
            <label><b>Tên plugin:</b></label>
            <p>'.$row["name"].'</p>
            <hr>
            <label><b>Mô tả chi tiết:</b></label>
            <p>'.$row["description"].'</p>
            <hr>
            <label><b>Link video review:</b></label>
            <p>'.$row["link_video"].'</p>
            <hr>
            <label><b>Ảnh mô tả:</b></label><br>
            <img src="'.$row["present_image"].'" alt="ẢNH MÔ TẢ">
        ';
    } else{
        echo '
            <p><i class="fas fa-exclamation-triangle text-danger"></i> Chưa / không có bất kì mô tả chi tiết nào cho sản phẩm này!</p>&emsp;<a href="./shopfile.php">Quay lại</a>
        ';
    }
    $con -> close();
}
?>