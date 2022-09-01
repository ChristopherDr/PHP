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
    
    $array = ['Corsa ', '1','branco'];
    $array1 = ['Prius ', '1', 'vermelho'];
    $array2 = ['HB20 ', '1', 'azul'];
    $array3 = ['Vectra', '2', 'preto'];
    $array4 = ['Jetta', '2', 'prata'];
    $array5 = ['BMW', '2', 'rosa'];
    $array6 = ['Citroen', '2', 'verde'];
    $array7 = ['Ferrari', '1', 'verde'];
    $array8 = ['Cerato ', '2','branco'];
    $array9 = ['Prius ', '2', 'vermelho'];
    $array10 = ['HB20 ', '2', 'azul'];
    $array11 = ['Vectra', '1', 'preto'];
    $array12 = ['Jetta', '1', 'prata'];
    $array13 = ['BMW', '1', 'rosa'];

    $lista = [];

    array_push($lista, $array);
    array_push($lista, $array1);
    array_push($lista, $array2);
    array_push($lista, $array3);
    array_push($lista, $array4);
    array_push($lista, $array5);
    array_push($lista, $array6);
    array_push($lista, $array7);
    array_push($lista, $array8);
    array_push($lista, $array9);
    array_push($lista, $array10);
    array_push($lista, $array11);
    array_push($lista, $array12);
    array_push($lista, $array13);

    $ano = "";
    $nome = readline("Digite seu nome: ");
    $cor = readline("Digite a cor do carro: ");
    $modelo = readline("Digite o modelo (1 - Seda/ 2 - Hatch): ");
    receberDados($modelo);
    percorreLista($lista, $modelo, $cor, $nome, $ano);




    function receberDados($modelo){

        while (true){
            if ($modelo > 0 && $modelo < 3) {

                break;
            } else {
                $modelo = readline("Numero inserido inválido!\nDigite novamente o número dos modelos entre (1 - Seda/ 2 - Hatch): ");
            }
        }
    }

        

        


    function percorreLista($lista, $modelo, $cor, $nome, $ano){

        $random = rand(0,5);
        $text = [ "2014", "2015", "2016", "2017", "2018", "2021"];
        foreach($text as $value => $v){
            if ($random == $value){
                $ano = $v;
                break;
            }
        }

        for($i = 0; $i < count($lista); $i++){
            for($cont = 0;  $cont < count($lista); $cont++) {
                if ($modelo == $lista[$i][1] && $cor == $lista[$i][2]) {
                    echo  "Caro $nome, o modelo indicado é: "."\n";
                   print_r($lista[$i][0].$ano."\n");
                   
                }break;
            }
        
        }
    }
























?>