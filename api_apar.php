<?php
    include "koneksi.php";
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(406);

    if(isset($_GET['create']) || isset($_POST['create'])){
        $nomor;
        $lokasi;
        $kadaluarsa;
        if(isset($_GET['create'])){
            $nomor = $_GET['nomor'];
            $lokasi = $_GET['lokasi'];
            $kadaluarsa = $_GET['kadaluarsa'];
        }
        else if(isset($_POST['create'])){
            $nomor = $_POST['nomor'];
            $lokasi = $_POST['lokasi'];
            $kadaluarsa = $_POST['kadaluarsa'];
        }
        //2024-03-31 00:00:00 
        $sql = "INSERT INTO `apar` (`id`, `nomor`, `lokasi`, `tanggal_kadaluarsa`, `timestamp`) VALUES (NULL, '".$nomor."', '".$lokasi."', '".$kadaluarsa."', current_timestamp());";
        $result = mysqli_query($conn, $sql);
        if($result){
            http_response_code(200);
            $data = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM apar WHERE nomor = '".$nomor."'"));
            echo json_encode([
                "status" => "success",
                "data" => $data,
                "pesan" => "Data Apar Berhasil Ditambahkan",
            ]);
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Data Apar Gagal Ditambahkan",
            ]);
        }
    }
    
    if(isset($_GET['read']) || isset($_POST['read'])){
        $datas;
        $result = mysqli_query($conn, "SELECT * FROM apar");
        $arr = 0;
        while($data = mysqli_fetch_object($result)){
            $datas[$arr++] = $data;
        }
        echo json_encode([
            "status" => "success",
            "pesan" => "Read all data Apar Success",
            "data" => $datas,
        ]);
    }
    if(isset($_GET['update']) || isset($_POST['update'])){
        $id = null;
        $nomor = null;
        $lokasi = null;
        $kadaluarsa = null;
        if(isset($_GET['update'])){
            if(isset($_GET['id'])) $id = $_GET['id'];
            if(isset($_GET['nomor'])) $nomor = $_GET['nomor'];
            if(isset($_GET['lokasi'])) $lokasi = $_GET['lokasi'];   
            if(isset($_GET['kadaluarsa'])) $kadaluarsa = $_GET['kadaluarsa'];
        }
        else if(isset($_POST['update'])){
            if(isset($_POST['id'])) $id = $_POST['id'];
            if(isset($_POST['nomor'])) $nomor = $_POST['nomor'];
            if(isset($_POST['lokasi'])) $lokasi = $_POST['lokasi'];
            if(isset($_POST['kadaluarsa'])) $kadaluarsa = $_POST['kadaluarsa'];
        }
        $data = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM `apar` WHERE id = ".$id));
        if($data){
            if($nomor != null) $data->nomor = $nomor;
            if($lokasi != null) $data->lokasi = $lokasi;
            if($kadaluarsa != null) $data->tanggal_kadaluarsa = $kadaluarsa;
            
            //2024-03-31 00:00:00 
            $sql = "UPDATE `apar` SET `nomor` = '".$data->nomor."', `lokasi` = '".$data->lokasi."', `tanggal_kadaluarsa` = '".$data->tanggal_kadaluarsa."' WHERE `apar`.`id` = ".$id.";";
            $result = mysqli_query($conn, $sql);
            if($result){
                http_response_code(200);
                $data = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM apar WHERE id = '".$id."'"));
                echo json_encode([
                    "status" => "success",
                    "pesan" => "Data Apar Berhasil Diupdate",
                    "data" => $data,
                ]);
            }
            else{
                echo json_encode([
                    "status" => "failed",
                    "pesan" => "Data Apar Gagal Diupdate",
                ]);
            }
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Data Apar Gagal Diupdate, ID tidak ditemukan!",
            ]);
        }
    }

    if(isset($_GET['delete']) || isset($_POST['delete'])){
        $id;
        if(isset($_GET['delete'])){
            $id = $_GET['id'];
        }
        else if(isset($_POST['delete'])){
            $id = $_GET['id'];
        }
        $result = mysqli_query($conn, "DELETE FROM `apar` WHERE `apar`.`id` = ".$id);
        if($result){
            http_response_code(200);
            echo json_encode([
                "status" => "success",
                "pesan" => "Delete Apar Berhasil",
            ]);
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Delete Apar Gagal",
            ]);
        }
    }