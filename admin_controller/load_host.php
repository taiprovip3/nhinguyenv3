<?php
include '../../database/connectDB.php';
$sql = "select * from files";
$result = mysqli_query($con, $sql);
$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
json_encode($json);
$countrow = count($json);
for ($i = 0; $i < $countrow; $i++){
    $row = $json["$i"];
    $isShowBtnCensored = '<span class="badge bg-success">censored</span>';
    if($row["censored"] == 0){
        $isShowBtnCensored = '<input type="submit" value="Duyệt" name="censor" class="btn btn-success btn-sm">';
    }
    echo '
    <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["name"].'</td>
        <td>'.$row["price"].'</td>
        <td>'.$row["version"].'</td>
        <td>'.$row["size"].'</td>
        <td>'.$row["compress_type"].'</td>
        <td>'.$row["publish_date"].'</td>
        <td>'.$row["description"].'</td>
        <td>'.$row["download_link"].'</td>
        <td>'.$row["author"].'</td>
        <td>'.$row["type"].'</td>
        <td>
            <form action="../../admin_controller/admin_host_manager.php" method="POST">
            <input type="hidden" name="id" value="'.$row["id"].'">
            '.$isShowBtnCensored.'
            <input type="submit" value="Xoá" name="delete" class="btn btn-danger btn-sm">
            </form>
        </td>
    </tr>
    ';
}
$con -> close();
?>