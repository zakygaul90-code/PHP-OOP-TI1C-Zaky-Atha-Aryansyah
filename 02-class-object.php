<?php
class Mahasiswa {
    public $nama;

    function tampilNama(){
        return "Nama saya " . $this->nama;
    }
}

$mhs = new Mahasiswa();
$mhs->nama = "Zaky";

echo $mhs->tampilNama();
?>
