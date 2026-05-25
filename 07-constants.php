<?php
class Salam {
    const PESAN = "Halo PHP OOP";

    public function tampil(){
        echo self::PESAN;
    }
}

$s = new Salam();
$s->tampil();
?>
