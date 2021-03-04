<?php

if (isset($_POST['tituloObra']) && !empty($_POST['tituloObra'])
 && isset($_POST['autorObra']) && !empty($_POST['autorObra'])
 && isset($_POST['dataDePublicacaoObra']) && !empty($_POST['dataDePublicacaoObra'])
 && isset($_POST['edicaoObra']) && !empty($_POST['edicaoObra'])
 && isset($_POST['editora']) && !empty($_POST['editora'])
 && isset($_POST['codigoCategoriaObra']) && !empty($_POST['codigoCategoriaObra'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $titulo=$_POST["tituloObra"];
    $autor=$_POST["autorObra"];
    $data_de_publicacao=$_POST["dataDePublicacaoObra"];
    $edicao=$_POST["edicaoObra"];
    $editora=$_POST["editora"];
    $codigoCategoriaObra=$_POST["codigoCategoriaObra"];

    $ISBN = $_SESSION['pesquisaObra'];

    $sql="UPDATE obra SET titulo=?, autor=?, dataDePublicacao=?, edicao=?, editora=?, codigoCategoria=? WHERE ISBN = $ISBN";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$titulo);
    $stmt ->bindValue(2,$autor);
    $stmt ->bindValue(3,$data_de_publicacao);
    $stmt ->bindValue(4,$edicao);
    $stmt ->bindValue(5,$editora);
    $stmt ->bindValue(6,$codigoCategoriaObra);
    $stmt->execute();



} else {
    header("Location: ../dadosObraA.php");
}

header("Location: ../../../index.php");

?>