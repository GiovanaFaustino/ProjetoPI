<?php

if (isset($_POST['idusuario']) && !empty($_POST['idusuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'banco/conexao.php';
    require 'Bibliotecario.class.php';

    $b = new Bibliotecario();

    $idusuario = addslashes($_POST['idusuario']);
    $senha = addslashes($_POST['senha']);

    if ($b->login($idusuario, $senha) == true) {
        if (isset($_SESSION['iduser'])) {
            header("Location: index.php");
        } else {
            header("Location: login.php");
        }

    } else {
        header("Location: login.php");
    }

} else {
    header("Location: login.php");
}


?>