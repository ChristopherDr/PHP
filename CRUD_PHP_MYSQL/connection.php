<?php

require_once 'dbconfig.php';
$conf = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    //echo "Conectado a $dbname.";
} catch (PDOException $pe) {
    //die($pe->getMessage());
}