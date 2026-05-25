<?php
class Mobil {
    public $nama;
    public $warna;
}

$mobil = new Mobil();
$mobil->nama = "Avanza";
$mobil->warna = "Hitam";

echo $mobil->nama . "<br>";
echo $mobil->warna;
?>
