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
                    <h3>Edit Data Customer : Tambah Data</h3>
                </header>
                    <form action="" method="post">
                        <fieldset>
                            <legend>Form Data Customer</legend>
                            <table>
                                <tr>
                                    <td>Customer Number</td>
                                    <td> : </td>
                                    <td><input type="text" name="cust_number"></td>
                                </tr>
                                <tr>
                                    <td>Customer Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="cust_name"></td>
                                </tr>
                                <tr>
                                    <td>Contact Last Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="last_name"></td>
                                </tr>
                                <tr>
                                    <td>Contact First Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="first_name"></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td> : </td>
                                    <td><input type="text" name="phone"></td>
                                </tr>
                                <tr>
                                    <td>Address Line 1</td>
                                    <td> : </td>
                                    <td><input type="text" name="address1"></td>
                                </tr>
                                <tr>
                                    <td>Address Line 2</td>
                                    <td> : </td>
                                    <td><input type="text" name="address2"></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td> : </td>
                                    <td><input type="text" name="city"></td>
                                </tr>
                                <tr>
                                    <td>State</td>
                                    <td> : </td>
                                    <td><input type="text" name="state"></td>
                                </tr>
                                <tr>
                                    <td>Postal Code</td>
                                    <td> : </td>
                                    <td><input type="text" name="postal_code"></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td> : </td>
                                    <td><input type="text" name="country"></td>
                                </tr>
                                <tr>
                                    <td>Sales Rep Employee Number</td>
                                    <td> : </td>
                                    <td><input type="text" name="sales_number"></td>
                                </tr>
                                <tr>
                                    <td>Credit Limit</td>
                                    <td> : </td>
                                    <td><input type="text" name="credit_limit"></td>
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
                            mysqli_query($koneksi, "INSERT INTO customers set
                            customerNumber = '$_POST[cust_number]',
                            customerName = '$_POST[cust_name]',
                            contactLastName = '$_POST[last_name]',
                            contactFirstName = '$_POST[first_name]',
                            phone = '$_POST[phone]',
                            addressLine1 = '$_POST[address1]',
                            addressLine2 = '$_POST[address2]',
                            city = '$_POST[city]',
                            state = '$_POST[state]',
                            postalCode = '$_POST[postal_code]',
                            country = '$_POST[country]',
                            salesRepEmployeeNumber = '$_POST[sales_number]',
                            creditLimit = '$_POST[credit_limit]'");

                            echo "Tambah data customer berhasil";
                        }
                    ?>
                </main>
            </div>
    </body>
    </html>