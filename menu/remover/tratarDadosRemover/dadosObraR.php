<?php


    require '../../../banco/conexao.php';

    global $pdo;

    $ISBN = $_SESSION['pesquisaObraR'];
    
    $sql="DELETE FROM obra WHERE ISBN=?";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$ISBN);
    $stmt->execute();




header("Location: ../../../index.php");

?>