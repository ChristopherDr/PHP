<?php

$nome = readline("Digite seu nome: ");
$cor = readline("Digite a cor do carro: ");
$modelo = readline("Digite seu o modelo (1 - Seda/ 2 - Hatch): ");

while (true){
    if ($modelo > 0 && $modelo < 3){
        break;
    } else{
        $modelo = readline("Digite novamente o número dos modelos entre (1 - Seda/ 2 - Hatch): ");
    }
}

$teste = true;

$carro = ["Modelo" => "corsa", "tipo" => "1", "cor" =>"branco"];
while (true){
    $i = 0;
    if ($modelo == $carro[$i]){
        echo"Certo";
        break;
    }else{
        $i++;
    }
}




