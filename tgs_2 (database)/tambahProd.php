<?php 
    include('crud.php')
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
                    <h3>Edit Data Produk : Tambah Data</h3>
                </header>
                    <form action="" method="post">
                        <fieldset>
                            <legend>Form Data Produk</legend>
                            <table>
                                <tr>
                                    <td>Product Code</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_code" required></td>
                                </tr>
                                <tr>
                                    <td>Product Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_name" required></td>
                                </tr>
                                <tr>
                                    <td>Product Line</td>
                                    <td> : </td>
                                    <td><select name="prod_line" required>
                                        <option></option>
                                        <?php
                                            $impor = new Menu();
                                            $product_line = $impor->impor_prod();
                                            
                                            foreach($product_line as $pro_line){
                                        ?>
                                            <?php echo "<option> $pro_line[productLine]</option>"; ?>

                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Product Scale</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_scale" required></td>
                                </tr>
                                <tr>
                                    <td>Product Vendor</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_vendor" required></td>
                                </tr>
                                <tr>
                                    <td>Product Description</td>
                                    <td> : </td>
                                    <td><input type="text" name="prod_desc" required></td>
                                </tr>
                                <tr>
                                    <td>Quantity In Stock</td>
                                    <td> : </td>
                                    <td><input type="text" name="stock" required></td>
                                </tr>
                                <tr>
                                    <td>Buy Price</td>
                                    <td> : </td>
                                    <td><input type="text" name="bPrice" required></td>
                                </tr>
                                <tr>
                                    <td>MSRP</td>
                                    <td> : </td>
                                    <td><input type="text" name="msrp" required></td>
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
                            $tambah_prod = new Menu();
                            $tambah_prod->tambah_prod(
                                                $_POST['prod_code'],
                                                $_POST['prod_name'],
                                                $_POST['prod_line'],
                                                $_POST['prod_scale'],
                                                $_POST['prod_vendor'],
                                                $_POST['prod_desc'],
                                                $_POST['stock'],
                                                $_POST['bPrice'],
                                                $_POST['msrp']);

                            echo "Tambah data produk berhasil";
                        }
                    ?>
                </main>
            </div>
    </body>
    </html>