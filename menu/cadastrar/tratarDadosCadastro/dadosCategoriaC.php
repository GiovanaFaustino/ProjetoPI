<?php

if (isset($_POST['dataDeEntregaCategoria']) && !empty($_POST['dataDeEntregaCategoria']) 
&& isset($_POST['descricaoCategoria']) && !empty($_POST['descricaoCategoria'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $codigoCategoria=$_POST["codigoCategoria"];
    $data_de_entrega=$_POST["dataDeEntregaCategoria"];
    $descricao=$_POST["descricaoCategoria"];


    $sql="INSERT INTO categoria(codigoCategoria, prazoDeEntrega ,descricao) VALUES (?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$codigoCategoria);
    $stmt ->bindValue(2,$data_de_entrega);
    $stmt ->bindValue(3,$descricao);
    $stmt->execute();



} else {
    header("Location: ../dadosCategoriaC.php");
}

header("Location: ../../../index.php");

?>