<?php 
    include('koneksi.php')
?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Utama</title>
        <link rel="stylesheet" href="styleIndex.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    </head>
    <body>
        <header>
            <h2>DATA PRODUK DAN CUSTOMER</h2>
        </header>
            <div class="navigation">
                <ul>
                    <li>
                        <a href="index.php">
                            <span class="icon">
                                <i class="fa fa-house"></i>
                            </span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="tampil.php">
                            <span class="icon">
                                <i class="fa-solid fa-database"></i>
                            </span>
                            <span class="title">Tampil Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="edit.php">
                            <span class="icon">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </span>
                            <span class="title">Edit Data</span>
                        </a>
                    </li>
                </ul>
            </div>
    
            <div class="main-content"> 
                <main>
                <header>
                    <h3>Edit Data Customer : Hapus Data</h3>
                </header>
                    <div class="tabelHasil">
                        <table border=1>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Customer Number</th>
                                <th>Customer Name</th>
                                <th>Contact Last Name</th>
                                <th>Contact First Name</th>
                                <th>Phone</th>
                                <th>Address Line1</th>
                                <th>Address Line2</th>
                                <th>City</th>
                                <th>State</th>
                                <th>Postal Code</th>
                                <th>Country</th>
                                <th>Sales Rep Employee Number</th>
                                <th>Credit Limit</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $ambil = mysqli_query($koneksi, "SELECT * FROM customers");
                                while ($tampil = mysqli_fetch_array($ambil)){
                                    echo "
                                        <tr>
                                            <td>$no</td>
                                            <td>$tampil[customerNumber]</td>
                                            <td>$tampil[customerName]</td>
                                            <td>$tampil[contactLastName]</td>
                                            <td>$tampil[contactFirstName]</td>
                                            <td>$tampil[phone]</td>
                                            <td>$tampil[addressLine1]</td>
                                            <td>$tampil[addressLine2]</td>
                                            <td>$tampil[city]</td>
                                            <td>$tampil[state]</td>
                                            <td>$tampil[postalCode]</td>
                                            <td>$tampil[country]</td>
                                            <td>$tampil[salesRepEmployeeNumber]</td>
                                            <td>$tampil[creditLimit]</td>
                                            <td>
                                                <a href='?kode=$tampil[customerNumber]'>
                                                    hapus
                                                </a>
                                            </td>
                                        </tr>";
                                    
                                    $no++;
                                }
                            ?>
                        </tbody>
                        </table>

                        <?php
                          if(isset($_GET['kode'])){
                            mysqli_query($koneksi, "DELETE FROM customers WHERE customerNumber = '$_GET[kode]'");
                        }
                        ?>
                    </div>
                </main>
            </div>
    
        
    </body>
    </html>