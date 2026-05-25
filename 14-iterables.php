<?php
function tampilData(iterable $data){
    foreach($data as $item){
        echo $item . "<br>";
    }
}

$array = ["PHP", "Java", "Python"];

tampilData($array);
?>
