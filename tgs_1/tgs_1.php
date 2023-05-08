<?php
    class Product{
        protected $name, $price, $discount;

        public function __construct($name, $price, $discount){
            $this->name = $name;
            $this->price = $price;
            $this->discount = $discount;
        }

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }
        public function setPrice($price){
            $this->price = $price;
        }
        public function getPrice(){
            return $this->price;
        }
        public function setDiscount($discount){
            $this->$discount = $discount;
        }
        public function getDiscount(){
            return $this->discount;
        }
    }

    class CDMusic extends Product{
        private $artist, $genre, $add, $add_discount;

        public function __construct($name, $price, $discount, $artist, $genre){
            parent::__construct($name, $price, $discount);

            $this->artist = $artist;
            $this->genre = $genre;
            $this->add = 0.1;
            $this->add_discount = 0.05;
        }

        public function getPrice(){
            $this->price = $this->price + $this->price*$this->add;
            $this->price = $this->price - $this->price*$this->discount;
            $this->price = $this->price - $this->price*$this->add_discount;
            return $this->price;
        }
        public function getDiscount(){
            return $this->discount;
        }
        public function setArtist($artist){
            $this->$artist = $artist;
        }
        public function getArtist(){
            return $this->artist;
        }
        public function setGenre($genre){
            $this->$genre = $genre;
        }
        public function getGenre(){
            return $this->genre;;
        }
        
    }

    class CDCabinet extends Product{
        private $capacity, $model, $add;

        public function __construct($name, $price, $discount, $capacity, $model){
            parent::__construct($name, $price, $discount);

            $this->capacity = $capacity;
            $this->model = $model;
            $this->add = 0.15;
        }
        public function getPrice(){
            $this->price = $this->price + $this->price*$this->add;
            $this->price = $this->price - $this->price*$this->discount;
            return $this->price;
        }
        public function getDiscount(){
            return $this->discount;;
        }
        public function setCapacity($capacity){
            $this->$capacity = $capacity;
        }
        public function getCapacity(){
            return $this->capacity;
        }
        public function setModel($model){
            $this->$model = $model;
        }
        public function getModel(){
            return $this->model;
        }
    }
    
            $produk1 = new CDMusic("Produk1", 86000, 0.35, "Du Li", "Rock");
            $produk2 = new CDCabinet("Produk2", 1200000, 0.5, "3000", "Model1");
            
            echo "<b>CD Music</b><br>";
            echo "Nama : ".$produk1->getName().", harga : Rp".$produk1->getPrice().", diskon : ".$produk1->getDiscount().", artis : ".$produk1->getArtist().", genre : ".$produk1->getGenre();
            echo "<br>";
            echo "<b>CD Cabinet</b><br>";
            echo "Nama : ".$produk2->getName().", harga : Rp".$produk2->getPrice().", diskon : ".$produk2->getDiscount().", kapasitas : ".$produk2->getCapacity().", model : ".$produk2->getModel();


?>