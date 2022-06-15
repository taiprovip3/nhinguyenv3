<?php 
    include '../../database/connectDB.php';
    $username = $_SESSION['username'];
    $sql = "select * from mailboxs where `from` = '$username' or `to` = '$username'";
    $result = mysqli_query($con, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        echo '
        <tr>
            <td>'.$row["from"].'</td>
            <td>'.$row["to"].'</td>
            <td>'.$row["title"].'</td>
            <td><a href="#" data-bs-toggle="popover" title="Nội dung thư" data-bs-content="'.$row["content"].'"><i class="fas fa-envelope"></i>Mở</a></td>
            <td>'.$row["time_triggerred"].'</td>
            <td>
                <form action="../../controller/delete_mail.php" method="post">
                    <input type="hidden" name="id" value="'.$row["id"].'">
                    <input type="submit" value="Xoá" name="delete" class="btn btn-danger btn-sm">
                </form>
            </td>
        </tr>
        ';
    }
    $con -> close();
?>