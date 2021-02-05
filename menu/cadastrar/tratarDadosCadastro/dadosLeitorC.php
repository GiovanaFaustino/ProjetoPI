<?php

if (isset($_POST['nomeLeitor']) && !empty($_POST['nomeLeitor']) 
&& isset($_POST['cpfLeitor']) && !empty($_POST['cpfLeitor']) 
&& isset($_POST['emailLeitor']) && !empty($_POST['emailLeitor']) 
&& isset($_POST['telefoneLeitor']) && !empty($_POST['telefoneLeitor'])
&& isset($_POST['senhaLeitor']) && !empty($_POST['senhaLeitor'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $nome_Leitor=$_POST["nomeLeitor"];
    $cpf_Leitor=$_POST["cpfLeitor"];
    $email_Leitor=$_POST["emailLeitor"];
    $telefone_Leitor=$_POST["telefoneLeitor"];
    $senha_Leitor=$_POST["senhaLeitor"];


    $sql="INSERT INTO leitor(nome_leitor, cpf_leitor, email_leitor, telefone_leitor, senha_leitor) VALUES (?,?,?,?,?)";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1,$nome_Leitor );
    $stmt ->bindValue(2,$cpf_Leitor);
    $stmt ->bindValue(3,$email_Leitor);
    $stmt ->bindValue(4,$telefone_Leitor);
    $stmt ->bindValue(5,$senha_Leitor);
    $stmt->execute();



} else {
    header("Location: ../dadosLeitorC.php");
}

header("Location: ../../../index.php");

?>