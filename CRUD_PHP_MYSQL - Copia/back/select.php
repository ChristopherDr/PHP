<?php

require_once '../dbconfig.php';

$conf = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
    $myst = $conn -> prepare("SELECT * FROM users ");
    $myst -> execute();
    
    $list = $myst -> fetchAll();

    die('<pre>' . print_r($list, true) . '<pre>');

} catch (PDOException $ex){
    die($ex -> getMessage());
}
