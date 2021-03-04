<?php


    require '../../../banco/conexao.php';

    global $pdo;

    $id_leitor = $_SESSION['pesquisaLeitorR'];
    
    $sql="DELETE FROM leitor WHERE id_leitor=?";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$id_leitor);
    $stmt->execute();




header("Location: ../../../index.php");

?>