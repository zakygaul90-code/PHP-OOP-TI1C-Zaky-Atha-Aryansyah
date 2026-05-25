<?php
trait Pesan {
    public function halo(){
        echo "Halo Dunia";
    }
}

class Test {
    use Pesan;
}

$t = new Test();
$t->halo();
?>
