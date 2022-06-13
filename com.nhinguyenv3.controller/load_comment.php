<?php 
    include '../../com.nhinguyenv3.database/connectDB.php';
    $sql = "select * from comments";
    $result = mysqli_query($conn, $sql);
    $json = mysqli_fetch_all ($result, MYSQLI_ASSOC);
    json_encode($json);
    $countrow = count($json);
    for ($i = 0; $i < $countrow; $i++)
    {
        $row = $json["$i"];
        $day = substr($row["time"],8,2);
        $month = substr($row["time"],5,2);
        $year = substr($row["time"],0,4);
        $time = substr($row["time"],11);
        $date = $day."/".$month."/".$year;

        if($i % 2 != 0){
            echo '
            <div class="col-lg-12 d-flex">
                <div class="p-1">
                    <img src="../img/profile.png" alt="ICON" width="45px">
                </div>
                <div class="p-1 border">
                    <a href="./user-info.php?username='.$row["username"].'">'.$row["username"].'</a>
                    <span>'.$date.' ; '.$time.'</span><br>
                    <p><i class="fas fa-pen-square"></i> '.$row["comment"].'</p>
                </div>
            </div>
            ';
        } else{
            echo '
            <div class="col-lg-12 d-flex justify-content-end">
                <div class="p-1 border" style="text-align: right;">
                    <span>'.$time.' ; '.$date.'</span>
                    <a href="./user-info.php?username='.$row["username"].'">'.$row["username"].'</a>
                    <p>'.$row["comment"].' <i class="fas fa-pen-square"></i></p>
                </div>
                <div class="p-1">
                    <img src="../img/profile.png" alt="ICON" width="45px">
                </div>
            </div>
            ';
        }
    }
    $conn -> close();
?>