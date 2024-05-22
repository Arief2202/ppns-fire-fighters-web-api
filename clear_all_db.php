<?php
    include "koneksi.php";
    $sql = mysqli_query($conn, "SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA='ppns_fire_fighters'");
    while($tb = mysqli_fetch_object($sql)){
        mysqli_query($conn, "TRUNCATE TABLE `ppns_fire_fighters`.`$tb->TABLE_NAME`");
    }
    echo "done";