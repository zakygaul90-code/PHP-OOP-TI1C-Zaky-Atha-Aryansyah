<?php
class Motor {
    public $merk = "Honda";
    protected $jenis = "Sport";
    private $tahun = 2025;

    public function tampil(){
        echo $this->merk . "<br>";
        echo $this->jenis . "<br>";
        echo $this->tahun;
    }
}

$m = new Motor();
$m->tampil();
?>
