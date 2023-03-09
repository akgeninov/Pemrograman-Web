
<?php 
    echo "<h2>Hasil Form Pengisian</h2>";
    echo "Nama : ".$_POST['nama'];
    echo "<br>";
    echo "<br>Tanggal lahir : ".$_POST['tgl_lahir'];
    $tgl_lahir = date_create($_POST['tgl_lahir']); 
    $hari_ini = date_create();
    $diff = date_diff($tgl_lahir, $hari_ini);
    echo "<br>";
    echo "<br>Umur : ";
        if($hari_ini < $tgl_lahir){
            echo "0 tahun, 0 bulan, 0 hari";
        } else {
            if($diff->y <= 0){
                if($diff->m <= 0){
                    echo $diff->d." hari</p>";
                } else {
                    echo $diff->m." bulan, ";
                    echo $diff->d." hari</p>";
                }
            } else {
                echo $diff->y." tahun, ";
                echo $diff->m." bulan, ";
                echo $diff->d." hari</p>";
            }
        }
?>
