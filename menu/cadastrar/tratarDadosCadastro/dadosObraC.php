<?php

if (isset($_POST['ISBNObra']) && !empty($_POST['ISBNObra'])
 && isset($_POST['tituloObra']) && !empty($_POST['tituloObra'])
 && isset($_POST['autorObra']) && !empty($_POST['autorObra'])
 && isset($_POST['dataDePublicacaoObra']) && !empty($_POST['dataDePublicacaoObra'])
 && isset($_POST['edicaoObra']) && !empty($_POST['edicaoObra'])
 && isset($_POST['editora']) && !empty($_POST['editora'])
 && isset($_POST['codigoCategoriaObra']) && !empty($_POST['codigoCategoriaObra'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $ISBN=$_POST["ISBNObra"];
    $titulo=$_POST["tituloObra"];
    $autor=$_POST["autorObra"];
    $data_de_publicacao=$_POST["dataDePublicacaoObra"];
    $edicao=$_POST["edicaoObra"];
    $editora=$_POST["editora"];
    $codigoCategoriaObra=$_POST["codigoCategoriaObra"];


    $sql="INSERT INTO obra( ISBN, titulo, autor, dataDePublicacao, edicao, editora, codigoCategoria) VALUES (?,?,?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$ISBN);
    $stmt ->bindValue(2,$titulo);
    $stmt ->bindValue(3,$autor);
    $stmt ->bindValue(4,$data_de_publicacao);
    $stmt ->bindValue(5,$edicao);
    $stmt ->bindValue(6,$editora);
    $stmt ->bindValue(7,$codigoCategoriaObra);
    $stmt->execute();



} else {
    header("Location: ../dadosObraC.php");
}

header("Location: ../../../index.php")

?>