<?php
class Hewan {
    public function suara(){
        echo "Hewan bersuara";
    }
}

class Kucing extends Hewan {
    public function suara(){
        echo "Meong";
    }
}

$kucing = new Kucing();
$kucing->suara();
?>
