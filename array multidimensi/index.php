<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sy\tyleTgs5.css">
    <title>biodata</title>
</head>
<body>
    <?php
        $data = array(
                        array(  'nama' => 'Akge Ninov Royana', 
                                'npm' => '21081010097', 
                                'ttl' => 'Blitar, 9 November 2003', 
                                'alamat' => 'Ds. Kandangan, Kec. Srengat, Kab. Blitar', 
                                'riwayatPendidikan' => array(   'tk' => 'TK Dharma Wanita', 
                                                                'sd' => 'SD Maron', 
                                                                'smp' => 'SMPN 1 Srengat', 
                                                                'sma' => 'SMAN 1 Srengat'
                                                            ),
                                'foto' => '<img src = "foto.png" width=100px height=130px>',
                                'bio' => 'Namanya adalah Akge Ninov Royana, lahir di Blitar, 9 November 2003.
                                Ia adalah anak kedua dari pasangan Yoga dan Heti. Akge atau Ninov 
                                adalah nama panggilannya. Ia mempunyai kakak perempuan. Ketika berumur 6 tahun, ia memulai pendidikan di SDN Maron, Blitar.
                                Kemudian setelah lulus, ia melanjutkan pendidikannya di SMPN 1 Srengat.
                                Pada tahun 2018, ia lulus smp dan melanjutkan pendidikannya di SMAN 1 
                                Srengat. Pada tahun 2021, Akge memasuki masa bangku kuliah. Akge berkuliah di UPN 
                                Veteran Jawa Timur, Fakultas Ilmu Komputer, Prodi Informatika.',
                                'logo_upn' => '<img src = "logo upn.png" width=50px height=50px>'
                            )
        );
    ?>
    <div id="header">
        <table>
            <tr>
                <td>
                    <?php foreach($data as $biodata) : ?>
                        <td><?php echo $biodata['logo_upn']?></td>
                    <?php endforeach; ?>
                </td>
                <td><strong>
                    &emsp;&emsp;PROFIL ||   <?php foreach($data as $biodata) : ?>
                                                <td><?php echo $biodata['nama']?></td>
                                            <?php endforeach; ?>
                </strong></td>
            </tr>
        </table>
    </div>
    <table border="2" style="background-color:lavender;" width=50%>
            <tr>
                <th>Nama</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['nama']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>NPM</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['npm']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Tempat, tanggal lahir</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['ttl']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Alamat</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['alamat']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th rowspan=4>Riwayat Pendidikan</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['riwayatPendidikan']['tk']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['riwayatPendidikan']['sd']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['riwayatPendidikan']['smp']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['riwayatPendidikan']['sma']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Foto</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['foto']?></td>
                <?php endforeach; ?>
            </tr>
            <tr>
                <th>Tentang Akge</th>
                <?php foreach($data as $biodata) : ?>
                    <td><?php echo $biodata['bio']?></td>
                <?php endforeach; ?>
            </tr>
    </table>
</body>
</html>