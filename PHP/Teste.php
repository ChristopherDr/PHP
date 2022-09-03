<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="teste.css">
    
</head>
<body class="div__principal">
        <form method="get" action="Teste.php" class="formulario">
    
                <label class="label" for="nome">Digite o seu nome:</label>
                <input class="entrada" name="nome" type="text" required>
        
                <label class="label" for="cor">Digite a cor desejada:</label>
                <input class="entrada" name="cor" type="text" required>
        
                <label class="label" for="modelo">Modelo desejado <br> [1 - Seda / 2 - Hatch]: </label>
                <input class="entrada" type="number" name="modelo" required >
        
                <div class="div__btn">
                    <button class="form__btn">Enviar</button>
                    
            </form>
    </div>

</body>
</html>


<?php




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

    array_push($lista, $array, $array1, $array2, $array3, $array4, $array5, $array6, $array7, $array8, $array9, $array10, $array11, $array12, $array13);
 

    $modelo = "";
    $ano = "";
    $mandaIcon ="";
    $nome = isset ( $_GET["nome"]) ? ( $_GET["nome"]) : null ;
    $cor = isset ( $_GET["cor"]) ? ( $_GET["cor"]) : null;
    $modelo = isset( $_GET["modelo"]) ? ( $_GET["modelo"]) : null;
    chamarFuncoes($lista, $modelo, $cor, $nome, $ano);

    function chamarFuncoes($lista, $modelo, $cor, $nome, $ano){
        recebeDados($lista, $modelo, $cor, $nome, $ano);
        percorreLista($lista, $modelo, $cor, $nome, $ano);

    }

    function recebeDados($lista, $modelo, $cor, $nome, $ano){
        if ($modelo <0 || $modelo > 2) die(" <h1 style='color: red;'>Modelo '$modelo' é inválido! Digite Apenas 1 ou 2! </h1>");
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
                    $result = $lista[$i][0].$ano."\n";
                    echo  "<h1 style='color: white;'>Caro(a) $nome, o modelo indicado é : $result</h1>";
                   
                }break;
            }
        
        }
    }

?>

