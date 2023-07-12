<?php

$idade = 16;
$nome = 'vinicius';
$numeroDePessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo " a partir de 16 anos acompanhado".PHP_EOL;

if($idade >= 18){
    echo "Você tem $idade anos. Pode entrar sozinho!!";
}elseif($idade>=16 && $numeroDePessoas >1 ){
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
}else {
    echo "Você só tem $idade anos. Você não pode entrar!!";
}
echo PHP_EOL. " uma pena";

echo PHP_EOL;
echo'Adeus!';

/*
// Forma de verificar duas condiçoes com a logica and 
if ($idade >= 18 && $nome == 'vinicius'){
    echo "Você tem $idade anos.".PHP_EOL;
    echo 'Pode entrar!!'.PHP_EOL; 
}
if ($idade >= 18 and $nome == 'vinicius'){
    echo "Você tem $idade anos.".PHP_EOL;
    echo 'Pode entrar!!'.PHP_EOL; 
}

//Formas de verificar duas condições com a logica ou 
if ($idade == 18 || $idade > 18){
    echo "Você tem $idade anos.".PHP_EOL;
    echo 'Pode entrar!!'.PHP_EOL; 
}
if ($idade == 18 or $idade > 18){
    echo "Você tem $idade anos.".PHP_EOL;
    echo 'Pode entrar!!'.PHP_EOL; 
}
if ($idade >= 18){
    echo "Você tem $idade anos.".PHP_EOL;
    echo 'Pode entrar!!';
}*/
