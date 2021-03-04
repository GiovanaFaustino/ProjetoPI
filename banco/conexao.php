<?php

session_start();

$host = "localhost";
$usuario = "root";
$senha = "g88745059";
$bd = "biblioteca";

global $pdo;


try {
    
    $pdo = new PDO("mysql:dbname=".$bd."; host=".$host, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

} catch (PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}

function getConnection(){

    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "biblioteca";

    global $pdo;


    try {
    
        $pdo = new PDO("mysql:dbname=".$bd."; host=".$host, $usuario, $senha);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    

    } catch (PDOException $e) {
        echo "ERRO: ".$e->getMessage();
        exit;
    }
}

?>