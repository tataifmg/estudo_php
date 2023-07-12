<?php
for($contador = 1; $contador <= 15; $contador++){
    if($contador == 13){
        //continue; //o php irá pular a exeção do 13 e continuará o loop
        break; // quebra o loop 
    }
    echo "#$contador".PHP_EOL;
}
/* Formas de adionar um valor a ele mesmo 
    $contador = $contador + 1;
    $contador += 1; //dessa forma pode adicionar mais do que 1
    $contador ++ ; 
*/ 