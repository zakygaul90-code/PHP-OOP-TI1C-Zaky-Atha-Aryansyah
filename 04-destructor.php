<?php
class Siswa {
    public $nama;

    function __construct($nama){
        $this->nama = $nama;
    }

    function __destruct(){
        echo "Objek " . $this->nama . " dihapus";
    }
}

$siswa = new Siswa("Andi");
?>
