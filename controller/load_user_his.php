<?php 
    include '../../database/connectDB.php';
    $username = $_SESSION['username'];
    $sql = "select * from logs where username = '$username'";
    $result = mysqli_query($con, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        $row = $json["$i"];
        $day = substr($row["time_triggerred"],8,2);
        $month = substr($row["time_triggerred"],5,2);
        $year = substr($row["time_triggerred"],0,4);
        $time = substr($row["time_triggerred"],11);
        $date = $day."/".$month."/".$year;
        echo '
        <tr>
            <td> Ngày '.$date.' lúc '.$time.'</td>
            <td>'.$row["action"].'</td>
            <td>'.$row["status"].'</td>
        </tr>
        ';
    }
    $con -> close();
?>