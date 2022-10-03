<?php 
    require_once 'Bentuk2D.php';
    class SegitigaSamaSisi extends Bentuk2D{
        protected $alas = 10;
        protected $tinggi = 7;
        protected $sisi = 6;

        public function namaBidang(){
            echo $namaBidang = 'Segi Tiga';
        }

        public function keterangan(){
            echo 'Alas  = 10';
            echo ', Tinggi = 7';
            echo ', Sisi = 7';
        }

        public function __constructor($alas, $tinggi, $sisi){
            $this->alas = $alas;
            $this->tinggi = $tinggi;
            $this->sisi = $sisi;
        }

        public function luasBidang(){
            return $luasSegitiga =0.5 * $this->alas * $this->tinggi;
        }

        public function kelilingBidang(){
            return $kelilingSegitiga = $this->sisi * $this->sisi * $this->sisi;
        }
    }
?>