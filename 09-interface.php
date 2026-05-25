<?php
interface Hewan {
    public function suara();
}

class Ayam implements Hewan {
    public function suara(){
        echo "Kukuruyuk";
    }
}

$a = new Ayam();
$a->suara();
?>
