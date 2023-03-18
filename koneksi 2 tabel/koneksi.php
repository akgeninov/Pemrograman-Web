<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tugas5";

    $koneksi = mysqli_connect($host, $user, $pass);
        if($koneksi){
            $buka = mysqli_select_db($koneksi,$db);
            echo "Database terhubung";
            if (!$koneksi){
                echo"Koneksi gagal";
            }
        } else {
            echo "MySQL tidak terhubung";
        }
?>
