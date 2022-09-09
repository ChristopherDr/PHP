<?php

require_once '../dbconfig.php';

$login = $_POST;
$cpf = $_POST;

try{
    $myst = $conn -> prepare("INSERT INTO users (login, cpf) VALUES (:usuario_login, :usuario_cpf)");
    
    $myst -> BindParam(":usuario_login", $login);
    $myst -> BindParam(":usuarioP_cpf", $cpf);
    $myst -> execute();
    echo "$cpf"; 

} catch (PDOException $ex){
    die($ex -> getMessage());
}

