<?php
    class Mobil{
        // properti
        public $nama;
        public $merk;

        // method
        function cetakInfo(){
            echo "Nama: $this->nama, Merk: $this->merk";
        }
    }

    class MobilSport extends Mobil{
        // properti
        public $speed;

        // method
        function turbo(){
            echo "Turbo diaktifkan pada kecepatan $this->speed km/jam";
        }
    }

    class CityCar extends Mobil{
        // properti 
        public $model;

        // method
        function irit(){
            echo "Mobil $this->merk ini irit bahan bakar dan dilengkapi dengan sensor";
        }

        function sensor(){
           
        }
    }

    // Contoh penggunaan
    $mobilSport = new MobilSport();
    $mobilSport->nama = "Enzo";
    $mobilSport->merk = "Ferrari";
    $mobilSport->speed = 400;
    $mobilSport->cetakInfo();  
    echo "<br>";
    $mobilSport->turbo();      

    echo "<br><br>";

    $cityCar = new CityCar();
    $cityCar->nama = "Honda";
    $cityCar->merk = "Brio";
    $cityCar->model = "2019";
    $cityCar->cetakInfo();     
    echo "<br>";
    $cityCar->irit();         
    echo "<br>";
    $cityCar->sensor();        