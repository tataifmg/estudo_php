<?php

$idade = 16;
echo "Olá mundo!". PHP_EOL;//quebra de linha 
echo "\n";// caractere especial para a quebra de linha 
echo "\t"; //caractere especial para tab 
echo "Eu tenho $idade anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos \n";

echo "Você tem $idade anos. Pode entrar";

//echo 'Olá ! Meu nome é '.$nome . 'Meu e-mail é '.$email.'. Tenho' . $idade . ' anos';
/* Podemos juntar variaveis a um texto no echo de duas formas.
   Primeira concatenando a string com a variavel atraves do .
        ex : echo 'Olá mundo! Minha idade é' . $idade . ' anos'; 
   Ou escrevendo o texto do echo com duas aspas com a variavel já no texto.
        ex: echo "Olá mundo! Minha idade é $idade anos";
*/