<?php
    class Koneksi{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "tugas5";
        protected $kon;

        function __construct(){
            if(!isset($this->kon)){
                $this->kon = new mysqli($this->host, $this->user, $this->pass, $this->db);
            } 
            if(!$this->kon){
                echo "Database tidak terhubung";
            } else {
                
            }
        }
    }
    $sambung = new Koneksi();
?>
