<?php
// $teste = true;

// $carro = ["Modelo" => "corsa", "tipo" => "1", "cor" =>"branco"];
// while (true){
//     $i = 0;
//     if ($modelo == $carro[$i]){
//         echo"Certo";
//         break;
//     }else{
//         $i++;
//     }
// }
    
    $array = ['Corsa', '1','branco'];
    $array1 = ['Prius', '1', 'red'];
    $array2 = ['HB20', '1', 'azul'];
    $array3 = ['Vectra', '2', 'preto'];
    $array4 = ['Jetta', '2', 'prata'];
    $array5 = ['BMW', '2', 'rosa'];

    $lista = [];

    array_push($lista, $array);
    array_push($lista, $array1);
    array_push($lista, $array2);
    array_push($lista, $array3);
    array_push($lista, $array4);
    array_push($lista, $array5);

    $nome = readline("Digite seu nome: ");
    $cor = readline("Digite a cor do carro: ");
    $modelo = readline("Digite seu o modelo (1 - Seda/ 2 - Hatch): ");
    receberDados($modelo);
    percorreLista($lista, $modelo);

    function receberDados($modelo){

        while (true){
            if ($modelo > 0 && $modelo < 3) {

                break;
            } else {
                $modelo = readline("Digite novamente o número dos modelos entre (1 - Seda/ 2 - Hatch): ");
            }
        }
    }

    function percorreLista($lista, $modelo, $cor){

        for($i = 0; $i < count($lista); $i++){
            for($cont = 0;  $cont < count($lista); $cont++) {
                if ($modelo == $lista[$i][1] && $cor == $lista[$i][2]) {
                    print_r($lista[$i][0]);
                }break;
            }
        
        }
    }


?>