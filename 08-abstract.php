<?php
abstract class Kendaraan {
    abstract public function jalan();
}

class Mobil extends Kendaraan {
    public function jalan(){
        echo "Mobil berjalan";
    }
}

$m = new Mobil();
$m->jalan();
?>
