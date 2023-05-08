<?php
    include('koneksi.php');
    
    class Menu extends Koneksi{
        function __construct(){
            parent::__construct();
        }

        public function hitung_data_cust(){
            $data = mysqli_query($this->kon, "SELECT * FROM customers");
            $jml_pelanggan = mysqli_num_rows($data);

            return $jml_pelanggan;
        }
        public function hitung_data_prod(){
            $data = mysqli_query($this->kon, "SELECT * FROM products");
            $jml_produk = mysqli_num_rows($data);

            return $jml_produk;
        }
        public function tampil_data_cust(){
            $ambil = "SELECT * FROM customers";

            $tampil = $this->kon->query($ambil);

            $rows = array();
            while($row = $tampil->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function tampil_data_prod(){
            $ambil = "SELECT * FROM products";

            $tampil = $this->kon->query($ambil);

            $rows = array();
            while($row = $tampil->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function tambah_cust($cust_number, $cust_name, $last_name, $first_name, $phone, $address1, $address2, $city, $state, $postal_code, $country, $sales_number, $credit_limit){
            $tambah ="INSERT INTO customers VALUES('$cust_number', '$cust_name', '$last_name', '$first_name', '$phone', '$address1', '$address2', '$city', '$state', '$postal_code', '$country', '$sales_number', '$credit_limit')";

            $proses = $this->kon->query($tambah);
        }
        public function tambah_prod($prod_code, $prod_name, $prod_line, $prod_scale, $prod_vendor, $prod_desc, $stock, $bPrice, $msrp){
            $tambah ="INSERT INTO products VALUES('$prod_code', '$prod_name', '$prod_line', '$prod_scale', '$prod_vendor', '$prod_desc', '$stock', '$bPrice', '$msrp')";

            $proses = $this->kon->query($tambah);
        }
        public function impor_cust(){
            $impor = "SELECT * FROM employees";

            $proses = $this->kon->query($impor);

            $rows = array();
            while($row = $proses->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function impor_prod(){
            $impor = "SELECT * FROM productlines";

            $proses = $this->kon->query($impor);

            $rows = array();
            while($row = $proses->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function pilih_edit_cust($cust_number){
            $ambil = "SELECT * FROM customers WHERE customerNumber = '$cust_number'";

            $tampil = $this->kon->query($ambil);

            $rows = array();
            while($row = $tampil->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function update_cust($cust_number, $cust_name, $last_name, $first_name, $phone, $address1, $address2, $city, $state, $postal_code, $country, $sales_number, $credit_limit){
            $ubah = "UPDATE customers SET 
                            customerNumber = '$cust_number', 
                            customerName = '$cust_name', 
                            contactLastName = '$last_name', 
                            contactFirstName = '$first_name', 
                            phone = '$phone', 
                            addressLine1 = '$address1', 
                            addressLine2 = '$address2', 
                            city = '$city', 
                            state = '$state', 
                            postalCode = '$postal_code', 
                            country = '$country', 
                            salesRepEmployeeNumber = '$sales_number', 
                            creditLimit = '$credit_limit'
                        WHERE customerNumber = '$cust_number'";
            $proses = $this->kon->query($ubah);
        }
        public function pilih_edit_prod($prod_code){
            $ambil = "SELECT * FROM products WHERE productCode = '$prod_code'";

            $tampil = $this->kon->query($ambil);

            $rows = array();
            while($row = $tampil->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        public function update_prod($prod_code, $prod_name, $prod_line, $prod_scale, $prod_vendor, $prod_desc, $stock, $bPrice, $msrp){
            $ubah = "UPDATE products SET 
                            productCode = '$prod_code',
                            productName = '$prod_name',
                            productLine = '$prod_line',
                            productScale = '$prod_scale',
                            productVendor = '$prod_vendor',
                            productDescription = '$prod_desc',
                            quantityInStock = '$stock',
                            buyPrice = '$bPrice',
                            MSRP = '$msrp'
                        WHERE productCode = '$prod_code'";
            $proses = $this->kon->query($ubah);
        }
        public function hapus_cust($cust_number){
            $hapus = "DELETE FROM customers WHERE customerNumber = '$cust_number'";

            $proses = $this->kon->query($hapus);
        }
        public function hapus_prod($prod_code){
            $hapus = "DELETE FROM products WHERE productCode = '$prod_code'";

            $proses = $this->kon->query($hapus);
        }
    } 