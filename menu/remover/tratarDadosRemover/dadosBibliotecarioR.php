<?php


    require '../../../banco/conexao.php';

    global $pdo;

    $idusuario = $_SESSION['pesquisaBibliotecarioR'];
    
    $sql="DELETE FROM bibliotecario WHERE idusuario=?";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$idusuario);
    $stmt->execute();




header("Location: ../../../index.php");

?>