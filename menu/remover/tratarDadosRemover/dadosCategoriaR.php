<?php


    require '../../../banco/conexao.php';

    global $pdo;

    $codigoCategoria = $_SESSION['pesquisaR'];
    
    $sql="DELETE FROM categoria WHERE codigoCategoria=?";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$codigoCategoria);
    $stmt->execute();




header("Location: ../../../index.php");

?>