<?php
include '../../database/connectDB.php';
$sql = "select * from logs";
$result = mysqli_query($con, $sql);
$json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
json_encode($json);
$countrow = count($json);
for ($i = 0; $i < $countrow; $i++){
    $row = $json["$i"];
    echo '
    <tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["time_triggerred"].'</td>
        <td>'.$row["action"].'</td>
        <td>'.$row["status"].'</td>
        <td>'.$row["username"].'</td>
        <td>
            <form action="../../admin_controller/admin_log_manager.php" method="post">
                <input type="hidden" name="id" value="'.$row['id'].'">
                <input type="submit" value="Delete" name="delete-by-id" class="btn btn-link">
            </form>
        </td>
    </tr>
    ';
}
$con -> close();
?>