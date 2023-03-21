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
                    <h3>Edit Data Produk : Hapus Data</h3>
                </header>
                    <div class="tabelHasil">
                        <table border=3>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Product Code</th>
                                <th>Product Name</th>
                                <th>Product Line</th>
                                <th>Product Scale</th>
                                <th>Product Vendor</th>
                                <th>Product Drescription</th>
                                <th>Quantity In Stock</th>
                                <th>Buy Price</th>
                                <th>MSRP</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 1;
                                $ambil = mysqli_query($koneksi, "SELECT * FROM products");
                                while ($tampil = mysqli_fetch_array($ambil)){
                                    echo "
                                        <tr>
                                        <td>$no</td>
                                        <td>$tampil[productCode]</td>
                                        <td>$tampil[productName]</td>
                                        <td>$tampil[productLine]</td>
                                        <td>$tampil[productScale]</td>
                                        <td>$tampil[productVendor]</td>
                                        <td>$tampil[productDescription]</td>
                                        <td>$tampil[quantityInStock]</td>
                                        <td>$tampil[buyPrice]</td>
                                        <td>$tampil[MSRP]</td>
                                            <td>
                                                <a href='?kode=$tampil[productCode]'>
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
                            mysqli_query($koneksi, "DELETE FROM products WHERE productCode = '$_GET[kode]'");
                        }
                        ?>
                    </div>
                </main>
            </div>
    
        
    </body>
    </html>