<?php


    require '../../../banco/conexao.php';

    global $pdo;

    $codigoExemplar = $_SESSION['pesquisaExemplarR'];
    
    $sql="DELETE FROM exemplar WHERE codigoExemplar=?";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$codigoExemplar);
    $stmt->execute();




header("Location: ../../../index.php");

?>