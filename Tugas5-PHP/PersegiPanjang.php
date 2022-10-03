<!-- persegi panjang -->
<?php 
require_once 'Bentuk2D.php';

class PersegiPanjang extends Bentuk2D{
    protected $P = 10;
    protected $L = 5;

    public function keterangan(){
        echo 'Panjang  = 10';
        echo ', Lebar = 5';
    }

    public function namaBidang(){
        return $namaBidang = 'Persegi Panjang';
    }

    public function luasBidang(){
        return $luas = $this->P * $this->L;
    }

    public function kelilingBidang(){
        return $keliling = 2 * ($this->P + $this->L);
    }
}
?>