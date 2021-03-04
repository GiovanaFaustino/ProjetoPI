<?php

require 'verificar.php';

if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])):?>



<!doctype html>
<html lang="pt-br">
  <head>
    <title>Bibioteca - PI</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid px-4">
          <a class="navbar-brand" href="#"><img src="img/Logo.png" style="height: 40px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php?pg=menu/home">Início</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastrar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?pg=cadastrar/categoria">Categoria</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=cadastrar/obra">Obra</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=cadastrar/exemplar">Exemplar</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=cadastrar/leitor">Leitor(a)</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=cadastrar/bibliotecario">Bibliotecário(a)</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Atualizar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="index.php?pg=atualizar/categoria">Categoria</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=atualizar/obra">Obra</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=atualizar/exemplar">Exemplar</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=atualizar/leitor">Leitor(a)</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=atualizar/bibliotecario">Bibliotecário(a)</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Remover
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="index.php?pg=remover/categoria">Categoria</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=remover/obra">Obra</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=remover/exemplar">Exemplar</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=remover/leitor">Leitor(a)</a></li>
                  <li><a class="dropdown-item" href="index.php?pg=remover/bibliotecario">Bibliotecário(a)</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Consultar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="index.php?pg=consultar/categoria">Categoria</a></li>
                    <li><a class="dropdown-item" href="index.php?pg=consultar/obra">Obra</a></li>
                    <li><a class="dropdown-item" href="index.php?pg=consultar/exemplar">Exemplar</a></li>
                    <li><a class="dropdown-item" href="index.php?pg=consultar/leitor">Leitor(a)</a></li>
                    <li><a class="dropdown-item" href="index.php?pg=consultar/bibliotecario">Bibliotecário(a)</a></li>
                </ul>
              </li>
            </ul>
            <div class="d-flex">
                <label class="form-inline my-2 lg-0 me-3" style="color: #ccc;"><?php echo $nomeUser; ?></label>
                <a class="btn btn-primary" href="logout.php" role="button">SAIR</a>
            </div>
        </div>
    </nav>

      <main>
          <div class="container-fluid px-4">

              <?php
              $pg = "";
              if (isset($_GET['pg']) && !empty($_GET['pg'])) {
                  $pg =  addslashes($_GET['pg']);
              }    

              switch ($pg) {
                  case 'menu/home': require 'menu/home.php'; break;

                  case 'cadastrar/categoria': require 'menu/cadastrar/categoria.php'; break;
                  case 'cadastrar/obra': require 'menu/cadastrar/obra.php'; break;
                  case 'cadastrar/exemplar': require 'menu/cadastrar/exemplar.php'; break;
                  case 'cadastrar/leitor': require 'menu/cadastrar/leitor.php'; break;
                  case 'cadastrar/bibliotecario': require 'menu/cadastrar/bibliotecario.php'; break;

                  case 'atualizar/categoria': require 'menu/atualizar/categoria.php'; break;
                  case 'atualizar/obra': require 'menu/atualizar/obra.php'; break;
                  case 'atualizar/exemplar': require 'menu/atualizar/exemplar.php'; break;
                  case 'atualizar/leitor': require 'menu/atualizar/leitor.php'; break;
                  case 'atualizar/bibliotecario': require 'menu/atualizar/bibliotecario.php'; break;

                  case 'remover/categoria': require 'menu/remover/categoria.php'; break;
                  case 'remover/obra': require 'menu/remover/obra.php'; break;
                  case 'remover/exemplar': require 'menu/remover/exemplar.php'; break;
                  case 'remover/leitor': require 'menu/remover/leitor.php'; break;
                  case 'remover/bibliotecario': require 'menu/remover/bibliotecario.php'; break;

                  case 'emprestimo/realizar': require 'menu/emprestimo/realizar.php'; break;
                  case 'emprestimo/renovar': require 'menu/emprestimo/renovar.php'; break;
                  case 'emprestimo/darbaixa': require 'menu/emprestimo/darbaixa.php'; break;

                  case 'consultar/categoria': require 'menu/consultar/categoria.php'; break;
                  case 'consultar/obra': require 'menu/consultar/obra.php'; break;
                  case 'consultar/exemplar': require 'menu/consultar/exemplar.php'; break;
                  case 'consultar/leitor': require 'menu/consultar/leitor.php'; break;
                  case 'consultar/bibliotecario': require 'menu/consultar/bibliotecario.php'; break;
                  case 'consultar/emprestimo': require 'menu/consultar/emprestimo.php'; break;
  
                  default: require 'menu/home.php'; break;
              }

              ?>

          </div>

      </main>


    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
  </body>
</html>

<?php else: header("Location: login.php"); endif;?>