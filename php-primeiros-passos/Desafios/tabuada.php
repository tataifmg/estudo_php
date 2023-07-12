<?php
$multiplicador = 9;
for($i = 1; $i < 10; $i++){
    echo "$i x $multiplicador = ".$i*$multiplicador .PHP_EOL;
}
//Segunda forma
$multiplicador = 9;
for($i = 1; $i < 10; $i++){
    $resultado = $i*$multiplicador;
    echo PHP_EOL."$i x $multiplicador = ". $resultado;
}