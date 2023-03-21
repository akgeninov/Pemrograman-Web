<?php 
    include('koneksi.php');

    $sql = mysqli_query($koneksi, "SELECT * FROM products where productCode = '$_GET[kode]'");
    $data = mysqli_fetch_array($sql);
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
                    Edit Data Customer : ubah data
                    <br><br><br>
                    <form action="" method="post">
                        <fieldset>
                        <legend>Form Data Produk</legend>
                            <table>
                                <tr>
                                    <td>Product Code</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_code" value="<?php echo $data['productCode']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_name" value="<?php echo $data['productName']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Product Line</td>
                                    <td> : </td>
                                    <td><select name="prod_line">
                                        <option><?php echo $data['productLine']; ?></option>
                                        <?php
                                            $impor_data = mysqli_query($koneksi, "SELECT * FROM productlines");
                                            while($data2 = mysqli_fetch_array($impor_data)){
                                                echo "<option value=$data2[productLine]> $data2[productLine] </option>";
                                            }
                                        ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product Scale</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_scale" value="<?php echo $data['productScale']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Product Vendor</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_vendor" value="<?php echo $data['productVendor']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Product Description</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_desc" value="<?php echo $data['productDescription']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Quantity In Stock</td>
                                    <td> : </td>
                                    <td><input type="text" name="stock" value="<?php echo $data['quantityInStock']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Buy Price</td>
                                    <td> : </td>
                                    <td><input type="text" name="bPrice" value="<?php echo $data['buyPrice']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>MSRP</td>
                                    <td> : </td>
                                    <td><input type="text" name="msrp" value="<?php echo $data['MSRP']; ?>"></td>
                                </tr>
                                <tr></tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="Simpan" name="proses">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>

                    <?php

                        if(isset($_POST['proses'])){
                            mysqli_query($koneksi, "INSERT INTO products set
                            productCode = '$_POST[prod_code]',
                            productName = '$_POST[prod_name]',
                            productLine = '$_POST[prod_line]',
                            productScale = '$_POST[prod_scale]',
                            productVendor = '$_POST[prod_vendor]',
                            productDescription = '$_POST[prod_desc]',
                            quantityInStock = '$_POST[stock]',
                            buyPrice = '$_POST[bPrice]',
                            MSRP = '$_POST[msrp]'");

                            echo "Ubah data produk berhasil";
                        }
                    ?>
                </main>
            </div>
    </body>
    </html>