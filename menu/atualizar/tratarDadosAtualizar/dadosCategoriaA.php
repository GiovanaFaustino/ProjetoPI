<?php

if (isset($_POST['dataDeEntregaCategoria']) && !empty($_POST['dataDeEntregaCategoria']) 
&& isset($_POST['descricaoCategoria']) && !empty($_POST['descricaoCategoria'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $codigoCategoria = $_SESSION['pesquisa'];
    $data_de_entrega=$_POST["dataDeEntregaCategoria"];
    $descricao=$_POST["descricaoCategoria"];

    $sql="UPDATE categoria SET prazoDeEntrega=?, descricao=? WHERE codigoCategoria = $codigoCategoria";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$data_de_entrega);
    $stmt ->bindValue(2,$descricao);
    $stmt->execute();



} else {
    header("Location: ../dadosCategoriaA.php");
}

header("Location: ../../../index.php");

?>