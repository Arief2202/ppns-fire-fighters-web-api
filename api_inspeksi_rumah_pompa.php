<?php
    include "koneksi.php";
    header('Content-Type: application/json; charset=utf-8');
    http_response_code(406);

    if(isset($_GET['create']) || isset($_POST['create'])){
        $user_id;
        $lokasi;
        $kondisi;
        $ventilasi;
        $katup_hisap;
        $perpipaan;
        $pengukur_hisap;
        $pengukur_sistem;
        $tangki_hisap;
        $saringan_hisap;
        $katup_uji;
        $lampu_pengontrol;
        $lampu_saklar;
        $saklar_isolasi;
        $lampu_rotasi;
        $level_oli_motor;
        $pompa_pemeliharaan;
        $tangki_bahan_bakar;
        $saklar_pemilih;
        $pembacaan_tegangan;
        $pembacaan_arus;
        $lampu_baterai;
        $semua_lampu_alarm;
        $pengukur_waktu;
        $ketinggian_oli;
        $level_oli_mesin;
        $ketinggian_air;
        $tingkat_elektrolit;
        $terminal_baterai;
        $pemanas_jaket;
        $kondisi_uap;

        if(isset($_GET['create'])){
            $user_id = $_GET['user_id'];
            $lokasi = $_GET['lokasi'];
            $kondisi = $_GET['kondisi'];
            $ventilasi = $_GET['ventilasi'];
            $katup_hisap = $_GET['katup_hisap'];
            $perpipaan = $_GET['perpipaan'];
            $pengukur_hisap = $_GET['pengukur_hisap'];
            $pengukur_sistem = $_GET['pengukur_sistem'];
            $tangki_hisap = $_GET['tangki_hisap'];
            $saringan_hisap = $_GET['saringan_hisap'];
            $katup_uji = $_GET['katup_uji'];
            $lampu_pengontrol = $_GET['lampu_pengontrol'];
            $lampu_saklar = $_GET['lampu_saklar'];
            $saklar_isolasi = $_GET['saklar_isolasi'];
            $lampu_rotasi = $_GET['lampu_rotasi'];
            $level_oli_motor = $_GET['level_oli_motor'];
            $pompa_pemeliharaan = $_GET['pompa_pemeliharaan'];
            $tangki_bahan_bakar = $_GET['tangki_bahan_bakar'];
            $saklar_pemilih = $_GET['saklar_pemilih'];
            $pembacaan_tegangan = $_GET['pembacaan_tegangan'];
            $pembacaan_arus = $_GET['pembacaan_arus'];
            $lampu_baterai = $_GET['lampu_baterai'];
            $semua_lampu_alarm = $_GET['semua_lampu_alarm'];
            $pengukur_waktu = $_GET['pengukur_waktu'];
            $ketinggian_oli = $_GET['ketinggian_oli'];
            $level_oli_mesin = $_GET['level_oli_mesin'];
            $ketinggian_air = $_GET['ketinggian_air'];
            $tingkat_elektrolit = $_GET['tingkat_elektrolit'];
            $terminal_baterai = $_GET['terminal_baterai'];
            $pemanas_jaket = $_GET['pemanas_jaket'];
            $kondisi_uap = $_GET['kondisi_uap'];
        }
        if(isset($_POST['create'])){
            $user_id = $_POST['user_id'];
            $lokasi = $_POST['lokasi'];
            $kondisi = $_POST['kondisi'];
            $ventilasi = $_POST['ventilasi'];
            $katup_hisap = $_POST['katup_hisap'];
            $perpipaan = $_POST['perpipaan'];
            $pengukur_hisap = $_POST['pengukur_hisap'];
            $pengukur_sistem = $_POST['pengukur_sistem'];
            $tangki_hisap = $_POST['tangki_hisap'];
            $saringan_hisap = $_POST['saringan_hisap'];
            $katup_uji = $_POST['katup_uji'];
            $lampu_pengontrol = $_POST['lampu_pengontrol'];
            $lampu_saklar = $_POST['lampu_saklar'];
            $saklar_isolasi = $_POST['saklar_isolasi'];
            $lampu_rotasi = $_POST['lampu_rotasi'];
            $level_oli_motor = $_POST['level_oli_motor'];
            $pompa_pemeliharaan = $_POST['pompa_pemeliharaan'];
            $tangki_bahan_bakar = $_POST['tangki_bahan_bakar'];
            $saklar_pemilih = $_POST['saklar_pemilih'];
            $pembacaan_tegangan = $_POST['pembacaan_tegangan'];
            $pembacaan_arus = $_POST['pembacaan_arus'];
            $lampu_baterai = $_POST['lampu_baterai'];
            $semua_lampu_alarm = $_POST['semua_lampu_alarm'];
            $pengukur_waktu = $_POST['pengukur_waktu'];
            $ketinggian_oli = $_POST['ketinggian_oli'];
            $level_oli_mesin = $_POST['level_oli_mesin'];
            $ketinggian_air = $_POST['ketinggian_air'];
            $tingkat_elektrolit = $_POST['tingkat_elektrolit'];
            $terminal_baterai = $_POST['terminal_baterai'];
            $pemanas_jaket = $_POST['pemanas_jaket'];
            $kondisi_uap = $_POST['kondisi_uap'];
        }
        
        if( $kondisi != 'Aman' || 
            $ventilasi != 'Aman' || 
            $katup_hisap != 'Aman' || 
            $perpipaan != 'Aman' || 
            $pengukur_hisap != 'Aman' || 
            $pengukur_sistem != 'Aman' || 
            $tangki_hisap != 'Aman' || 
            $saringan_hisap != 'Aman' || 
            $katup_uji != 'Aman' || 
            $lampu_pengontrol != 'Aman' || 
            $lampu_saklar != 'Aman' || 
            $saklar_isolasi != 'Aman' || 
            $lampu_rotasi != 'Aman' || 
            $level_oli_motor != 'Aman' || 
            $pompa_pemeliharaan != 'Aman' || 
            $tangki_bahan_bakar != 'Aman' || 
            $saklar_pemilih != 'Aman' || 
            $pembacaan_tegangan != 'Aman' || 
            $pembacaan_arus != 'Aman' || 
            $lampu_baterai != 'Aman' || 
            $semua_lampu_alarm != 'Aman' || 
            $pengukur_waktu != 'Aman' || 
            $ketinggian_oli != 'Aman' || 
            $level_oli_mesin != 'Aman' || 
            $ketinggian_air != 'Aman' || 
            $tingkat_elektrolit != 'Aman' || 
            $terminal_baterai != 'Aman' || 
            $pemanas_jaket != 'Aman' || 
            $kondisi_uap != 'Aman'
        ){
            $users = mysqli_query($conn, "SELECT * FROM users where role = 1");
            while($userAdmin = mysqli_fetch_object($users)){
                $hydrant = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM hydrant WHERE id = $hydrant_id"));
                mysqli_query($conn, "INSERT INTO `notification` 
                (`id`, `user_id`, `title`, `content`, `displayed`, `timestamp`) VALUES (NULL, '$userAdmin->id', 'Rumah Pompa Hydrant Rusak Terinspeksi', 'Telah terdeteksi Rumah Pompa Rusak', '0', current_timestamp());");
            }
        }

        $sql = "INSERT INTO `inspeksi_hydrant_ihb` (`id`, `user_id`, `lokasi`, `kondisi`, `ventilasi`, `katup_hisap`, `perpipaan`, `pengukur_hisap`, `pengukur_sistem`, `tangki_hisap`, `saringan_hisap`, `katup_uji`, `lampu_pengontrol`, `lampu_saklar`, `saklar_isolasi`, `lampu_rotasi`, `level_oli_motor`, `pompa_pemeliharaan`, `tangki_bahan_bakar`, `saklar_pemilih`, `pembacaan_tegangan`, `pembacaan_arus`, `lampu_baterai`, `semua_lampu_alarm`, `pengukur_waktu`, `ketinggian_oli`, `level_oli_mesin`, `ketinggian_air`, `tingkat_elektrolit`, `terminal_baterai`, `pemanas_jaket`, `kondisi_uap`, `created_at`) VALUES (NULL, '$user_id', '$lokasi', '$kondisi', '$ventilasi', '$katup_hisap', '$perpipaan', '$pengukur_hisap', '$pengukur_sistem', '$tangki_hisap', '$saringan_hisap', '$katup_uji', '$lampu_pengontrol', '$lampu_saklar', '$saklar_isolasi', '$lampu_rotasi', '$level_oli_motor', '$pompa_pemeliharaan', '$tangki_bahan_bakar', '$saklar_pemilih', '$pembacaan_tegangan', '$pembacaan_arus', '$lampu_baterai', '$semua_lampu_alarm', '$pengukur_waktu', '$ketinggian_oli', '$level_oli_mesin', '$ketinggian_air', '$tingkat_elektrolit', '$terminal_baterai', '$pemanas_jaket', '$kondisi_uap', current_timestamp());";

        var_dump($sel);die;
        $result = mysqli_query($conn, $sql);
        if($result){
            http_response_code(200);
            // $data = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM inspeksi_apar WHERE nomor = '".$nomor."'"));
            echo json_encode([
                "status" => "success",
                // "data" => $data,
                "pesan" => "Data Inspeksi Hydrant IHB Berhasil Ditambahkan",
            ]);
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Data Inspeksi Hydrant IHB Gagal Ditambahkan",
            ]);
        }
    }
    
    if(isset($_GET['read']) || isset($_POST['read'])){
        $datas = [];
        $result = null;
        $start_date = null;
        $end_date = null;
        $inspeksi = null;
        $kerusakan = null;
        if(isset($_GET['read'])){
            if(isset($_GET['start_date'])) $start_date = $_GET['start_date'];
            if(isset($_GET['end_date'])) $end_date = $_GET['end_date'];
            if(isset($_GET['inspeksi'])) $inspeksi = $_GET['inspeksi'];
            if(isset($_GET['kerusakan'])) $kerusakan = $_GET['kerusakan'];
        }
        if($start_date!=null & $end_date != null){            
            $sqlll = "SELECT * FROM inspeksi_hydrant_ihb WHERE created_at > '$start_date' AND created_at < '$end_date'";
            
            if($kerusakan == "tidak") $sqlll .= " AND `kondisi_kotak` = 'Bersih' AND `posisi_kotak` = 'Tidak Terhalang' AND `kondisi_nozzle` = 'Baik' AND `kondisi_selang` = 'Baik' AND `kondisi_coupling` = 'Baik' AND `kondisi_landing_valve` = 'Baik' AND `kondisi_tray` = 'Baik'";
            if($kerusakan == "rusak") $sqlll .= " AND (`kondisi_kotak` != 'Bersih' OR `posisi_kotak` != 'Tidak Terhalang' OR `kondisi_nozzle` != 'Baik' OR `kondisi_selang` != 'Baik' OR `kondisi_coupling` != 'Baik' OR `kondisi_landing_valve` != 'Baik' OR `kondisi_tray` != 'Baik')";

            $result = mysqli_query($conn,$sqlll);
        }
        else $result = mysqli_query($conn, "SELECT * FROM inspeksi_hydrant_ihb");
        $arr = 0;
        if($result){
            http_response_code(200);
            if($inspeksi == 'belum'){
                $allHydrant = mysqli_query($conn, "SELECT * FROM hydrant WHERE jenis_hydrant = 'ihb'");
                while($data = mysqli_fetch_object($allHydrant)){
                    $data2 = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM inspeksi_hydrant_ihb WHERE hydrant_id = $data->id AND created_at > '$start_date' AND created_at < '$end_date'"));
                    if($data2 == null) $datas[$arr++] = $data;
                }
            }
            else{
                while($data = mysqli_fetch_object($result)){
                        $resultUser = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM users WHERE id = $data->user_id"));
                        $resultApar = mysqli_fetch_object(mysqli_query($conn, "SELECT * FROM hydrant WHERE id = $data->hydrant_id"));
                        $data->user = $resultUser;
                        $data->hydrant = $resultApar;
                        $datas[$arr++] = $data;
                }
            }
            echo json_encode([
                "status" => "success",
                "pesan" => "Read data inspeksi Success",
                "data" => $datas,

            ]);
        }
        else{
            echo json_encode([
                "status" => "failed",
                "pesan" => "Read data inspeksi Failed",
            ]);
        }
    }