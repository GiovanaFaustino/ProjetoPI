<?php

if (isset($_POST['ISBNExemplar']) && !empty($_POST['ISBNExemplar']) 
&& isset($_POST['codExemplar']) && !empty($_POST['codExemplar'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $cod_exemplar=$_POST["codExemplar"];
    $isbn_exemplar=$_POST["ISBNExemplar"];


    $sql="INSERT INTO exemplar(codigoExemplar, ISBN) VALUES (?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$cod_exemplar);
    $stmt ->bindValue(2,$isbn_exemplar);
    $stmt->execute();



} else {
    header("Location: ../dadosExemplarC.php");
}


header("Location: ../../../index.php");

?>