<?php
if (isset($_POST['nomeBibliotecario']) && !empty($_POST['nomeBibliotecario']) 
&& isset($_POST['cpfBibliotecario']) && !empty($_POST['cpfBibliotecario']) 
&& isset($_POST['emailBibliotecario']) && !empty($_POST['emailBibliotecario']) 
&& isset($_POST['telefoneBibliotecario']) && !empty($_POST['telefoneBibliotecario'])
&& isset($_POST['senhaBibliotecario']) && !empty($_POST['senhaBibliotecario'])){

    require '../../../banco/conexao.php';

    global $pdo;

    $nome_Bibliotecario=$_POST["nomeBibliotecario"];
    $cpf_Bibliotecario=$_POST["cpfBibliotecario"];
    $email_Bibliotecario=$_POST["emailBibliotecario"];
    $telefone_Bibliotecario=$_POST["telefoneBibliotecario"];
    $senha_Bibliotecario=$_POST["senhaBibliotecario"];

    $id_usuario = $_SESSION['pesquisaBibliotecario'];

    $sql="UPDATE bibliotecario SET nome=?, cpf=?, email=?, telefone=?, senha=? WHERE idusuario = $id_usuario ";

    $stmt = $pdo->prepare($sql);
    $stmt ->bindValue(1, $nome_Bibliotecario);
    $stmt ->bindValue(2,$cpf_Bibliotecario);
    $stmt ->bindValue(3,$email_Bibliotecario);
    $stmt ->bindValue(4,$telefone_Bibliotecario);
    $stmt ->bindValue(5,$senha_Bibliotecario);
    $stmt->execute();



} else {
    header("Location: ../dadosBibliotecarioA.php");
}

header("Location: ../../../index.php");

?>