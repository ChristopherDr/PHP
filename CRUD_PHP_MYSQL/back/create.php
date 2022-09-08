<?php

require_once '../front./form.html';
require_once '../connection.php';
require_once '../dbconfig.php';

$login = isset ($_POST["login"]) ? ($_POST["login"]) : NULL;
$cpf = isset ($_POST["cpf"]) ? ($_POST["cpf"]): NULL;

$my_Insert_Statement = $conn -> prepare("INSERT INTO users (login, cpf) VALUES (:usuario_login, :usuario_cpf)");

$my_Insert_Statement -> bindParam(':usuario_login', $login);
$my_Insert_Statement -> bindParam(':usuario_cpf', $cpf);

$teste = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if ($teste == NULL){
    echo "erro ao inserir dados!";
} else{
    $my_Insert_Statement -> execute();
    echo"Dados inseridos com sucesso!";
}