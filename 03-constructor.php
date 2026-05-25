<?php
class Buah {
    public $nama;

    function __construct($nama){
        $this->nama = $nama;
    }
}

$buah = new Buah("Mangga");
echo $buah->nama;
?>
