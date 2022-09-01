<?php

// $ano = "";

// random($ano);

// function random($ano){
//     $random = rand(0,5);
//     $text = [ "2014", "2015", "2016", "2017", "2018", "2021"];
//     echo $random;

//     foreach($text as $value => $v){
//         if ($random == $value){
//             $ano = $v;
//             echo $v;
            
//         } 
//     }
//     return $ano;
// }

$nome = "5";


$v = is_numeric ($nome) ? true : false;



$teste = readline("Digite aqui: ");
while(true){
    if ($v == true){
        break;
    }else{
        $teste = readline("Digite um número: ");
}
    
}

