<?php

require 'banco/conexao.php';

if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])){

    require_once 'Bibliotecario.class.php';
    $b = new Bibliotecario();

    $listLogged = $b->logged($_SESSION['iduser']);
    $nomeUser = $listLogged['nome'];

} else {
    header("Location: login.php");
}

?>