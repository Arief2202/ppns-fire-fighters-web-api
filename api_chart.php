<?php
    include "koneksi.php";
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(406);

    
    http_response_code(200);
    // $data = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM hydrant WHERE nomor = '".$nomor."'"));
    echo json_encode([
        "status" => "success",
        "data" => [
            "apar" => [
                "belum"=>"5",
                "rusak"=>"5",
                "normal"=>"5",
            ],
            "ihb" => [
                "belum"=>"6",
                "rusak"=>"6",
                "normal"=>"6",
            ],
            "ohb" => [
                "belum"=>"7",
                "rusak"=>"7",
                "normal"=>"7",
            ],
        ],
        "pesan" => "Data Hydrant Berhasil Ditambahkan",
    ]);