<!-- lingkaran -->
<?php 
require_once 'Bentuk2D.php';
class Lingkaran extends Bentuk2D{
    protected $phi = 3.14;
    protected $jari2 = 15;

    public function keterangan(){
        echo 'PHI = 3.14';
        echo ', Jari - jari = 15';
    }
    
    public function namaBidang(){
        return $namaBidang = 'Lingkaran';
    }

    public function luasBidang(){
        return $L = $this->phi * ($this->jari2 * $this->jari2);
    }

    public function kelilingBidang(){
        return $L = $this->phi * ($this->jari2 * 2);
    }
}

?>