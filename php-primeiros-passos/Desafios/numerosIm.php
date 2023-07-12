<?php
for($contador = 1; $contador<100; $contador++){
    if($contador%2 != 0){
        echo $contador .PHP_EOL;
    }
}
//Segunda forma
for($i=1;$i<=100;$i++){
    $o = $i%2;
    if($o == 0 ){
        continue;
    }
    echo $i .PHP_EOL;
}
//Terceira forma
for($i = 1; $i <= 99; $i += 2){
    echo $i .PHP_EOL ;
}
// Pula de dois em dois mostrando os numeros impares
