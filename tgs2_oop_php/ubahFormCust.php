<?php 
    include('crud.php');
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
                        <?php 
                            $ubah_cust = new Menu();
                            $customer = $ubah_cust->pilih_edit_cust($_GET['kode']);
                            foreach($customer as $cust){
                        ?>
                        <fieldset>
                            <legend>Form Data Customer</legend>
                            <table>
                                <tr>
                                    <td>Customer Number</td>
                                    <td> : </td>
                                    <td><input type="text" name="cust_number" value="<?php echo $cust['customerNumber']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Customer Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="cust_name" value="<?php echo $cust['customerName']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Contact Last Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="last_name" value="<?php echo $cust['contactLastName']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Contact First Name</td>
                                    <td> : </td>
                                    <td><input type="text" name="first_name" value="<?php echo $cust['contactFirstName']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td> : </td>
                                    <td><input type="text" name="phone" value="<?php echo $cust['phone']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Address Line 1</td>
                                    <td> : </td>
                                    <td><input type="text" name="address1" value="<?php echo $cust['addressLine1']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Address Line 2</td>
                                    <td> : </td>
                                    <td><input type="text" name="address2" value="<?php echo $cust['addressLine2']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>City</td>
                                    <td> : </td>
                                    <td><input type="text" name="city" value="<?php echo $cust['city']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>State</td>
                                    <td> : </td>
                                    <td><input type="text" name="state" value="<?php echo $cust['state']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Postal Code</td>
                                    <td> : </td>
                                    <td><input type="text" name="postal_code" value="<?php echo $cust['postalCode']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Country</td>
                                    <td> : </td>
                                    <td><input type="text" name="country" value="<?php echo $cust['country']; ?>"></td>
                                </tr>
                                <tr>
                                    <td>Sales Rep Employee Number</td>
                                    <td> : </td>
                                    <td><select name="sales_number">
                                        <option><?php echo $cust['salesRepEmployeeNumber']; ?></option>
                                        <?php
                                            $impor = new Menu();
                                            $sales_number = $impor->impor_cust();
                                            
                                            foreach($sales_number as $sales){
                                        ?>
                                            <?php echo "<option> $sales[employeeNumber] ($sales[firstName] $sales[lastName])</option>"; ?>

                                            <?php } ?>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Credit Limit</td>
                                    <td> : </td>
                                    <td><input type="text" name="credit_limit" value="<?php echo $cust['creditLimit']; ?>"></td>
                                </tr>
                                <tr></tr>
                            <?php } ?>
                                <tr>
                                    <td>
                                        <input type="submit" value="Simpan" name="proses">
                                    </td>
                                </tr>
                            </table>
                        </fieldset>
                    </form>

                    <?php

                        if (isset($_POST['proses'])){
                            $update_cust = new Menu();
                            $update_cust->update_cust(
                                $_POST['cust_number'],
                                $_POST['cust_name'],
                                $_POST['last_name'],
                                $_POST['first_name'],
                                $_POST['phone'],
                                $_POST['address1'],
                                $_POST['address2'],
                                $_POST['city'],
                                $_POST['state'],
                                $_POST['postal_code'],
                                $_POST['country'],
                                $_POST['sales_number'],
                                $_POST['credit_limit']);

                            echo "Ubah data customer berhasil";
                        }
                    ?>
                </main>
            </div>
    </body>
    </html>