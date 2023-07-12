<?php

$peso= 50;
$altura = 1.57;
$calculo = $peso/$altura**2;

if($calculo <= 18.4){
    echo "Seu imc é $calculo.Você está abaixo do peso recomendado, procure um nutricionista ";
}elseif($calculo > 18.5 && $calculo < 24.9){
    echo "Seu imc é $calculo.Você está com o peso recomendado";
}else if ($calculo > 25 && $calculo < 29.9){
    echo "Seu imc é $calculo.Você está com sobrepeso, procure um nutricionista";
}else{
    echo "Seu imc é $calculo.Você está obeso, procure um nutricionista";
}

