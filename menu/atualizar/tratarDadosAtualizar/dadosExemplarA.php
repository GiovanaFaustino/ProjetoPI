<?php


if (isset($_POST['ISBNExemplar']) && !empty($_POST['ISBNExemplar'])){

    require '../../../banco/conexao.php';

    global $pdo;


    $isbn_exemplar=$_POST["ISBNExemplar"];
    $codigoExemplar = $_SESSION['pesquisaExemplar'];

    $sql="UPDATE exemplar SET ISBN=? WHERE codigoExemplar = $codigoExemplar";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$isbn_exemplar);
    $stmt->execute();



} else {
    header("Location: ../dadosObraA.php");
}

header("Location: ../../../index.php");

?>