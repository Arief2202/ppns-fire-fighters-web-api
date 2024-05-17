<?php
    include "koneksi.php";
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(406);

    if(isset($_GET['read']) || isset($_POST['read'])){
        $datas=[];
        $user_id = null;
        $history = null;
        if(isset($_GET['user_id']) && $_GET['user_id'] != "") $user_id = $_GET['user_id']; 
        if(isset($_POST['user_id']) && $_POST['user_id'] != "") $user_id = $_POST['user_id'];
        if($user_id != null){
            $result = mysqli_query($conn, "SELECT * FROM notification WHERE `user_id` = $user_id AND `displayed` = 0");
            if($result){
                http_response_code(200);
                $arr = 0;
                while($data = mysqli_fetch_object($result)){
                    $datas[$arr++] = $data;
                }
                echo json_encode([
                    "status" => "success",
                    "pesan" => "Read all data Notificatoin Success",
                    "data" => $datas,
                ]);
            }
            else{
                echo json_encode([
                    "status" => "failed",
                    "pesan" => "Read all data Notification Failed!"
                ]);
            }
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Read all data Notification Failed!"
            ]);
        }
    }
    
    if(isset($_GET['displayed']) || isset($_POST['displayed'])){
        $notif_id = null;
        if(isset($_GET['notif_id']) && $_GET['notif_id'] != "") $notif_id = $_GET['notif_id']; 
        if(isset($_POST['notif_id']) && $_POST['notif_id'] != "") $notif_id = $_POST['notif_id'];
        
        if($notif_id != null){
            $result = mysqli_query($conn, "UPDATE `notification` SET `displayed` = '1' WHERE `notification`.`id` = $notif_id;");
            if($result){
                http_response_code(200);
                echo json_encode([
                    "status" => "success",
                    "pesan" => "Update Notification Success",
                ]);
            }
            else{
                echo json_encode([
                    "status" => "failed",
                    "pesan" => "Update Notification reading failed!"
                ]);
            }
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Required Notification id!"
            ]);
        }
    }
    