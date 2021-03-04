<html>
<head>
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/novostyle.css">
</head>
<body>
<?php

if (isset($_POST['pesquisaObra']) && !empty($_POST['pesquisaObra']) && isset($_POST['consultaObra']) ){

echo '<h4 class="novotitulo">Obra</h4>';
echo '<div class= "novatabela">';
echo '<table class="table table-dark table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">ISBN</th>';
echo '<th scope="col">Título</th>';
echo '<th scope="col">Autor</th>';
echo '<th scope="col">Data de Publicação</th>';
echo '<th scope="col">Edição</th>';
echo '<th scope="col">Editora</th>';
echo '<th scope="col">Código da Categoria</th>';
echo '</tr>';
echo '</thead>';


require '../../../banco/conexao.php';


$pesquisa=$_POST["pesquisaObra"];
$_SESSION['pesquisaObra'] = $pesquisa;

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM obra WHERE ISBN = $pesquisa";
$stmt = $con->query($sql) or die(mysqli->error);


while($consulta = $stmt->fetch_array()){
    echo '<tr>';
    echo '<td>'.$consulta['ISBN'].'</td>';
    echo '<td>'.$consulta['titulo'].'</td>';
    echo '<td>'.$consulta['autor'].'</td>';
    echo '<td>'.$consulta['dataDePublicacao'].'</td>';
    echo '<td>'.$consulta['edicao'].'</td>';
    echo '<td>'.$consulta['editora'].'</td>';
    echo '<td>'.$consulta['codigoCategoria'].'</td>';
    echo '</tr>';

}


echo '</table>';
echo '</div>';

echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">';
echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>';
}else{


}
?>

<h4 class="novotitulo">Atualizar Obra</h4>

<div class="obrborder">
    <form class="row g-3 obrform" action="dadosObraA.php" method="POST">
    <div class="col-6">
        <label for="inputTitulo" class="form-label">Título</label>
        <input type="text" name="tituloObra" class="form-control" id="inputTitulo" required>
    </div>
    <div class="col-md-6">
        <label for="inputAutor4" class="form-label">Autor</label>
        <input type="text" name="autorObra" class="form-control" id="inputAutor4">
    </div>
    <div class="col-md-6">
        <label for="inputData4" class="form-label">Data de Publicação</label>
        <input type="text" name="dataDePublicacaoObra" class="form-control" id="inputData4" placeholder="DD/MM/AAAA">
    </div>
    <div class="col-md-6">
        <label for="inputEdicao4" class="form-label">Edição</label>
        <input type="text" name="edicaoObra" class="form-control" id="inputEdicao4">
    </div>
    <div class="col-md-6">
        <label for="inputEditora4" class="form-label">Editora</label>
        <input type="text" name="editora" class="form-control" id="inputEditora4">
    </div>
    <div class="col-md-6">
        <label for="inputCodCat4" class="form-label">Código da Categoria</label>
        <input type="text" name="codigoCategoriaObra" class="form-control" id="inputCodCat4" required>
    </div>
    <div class="col-12">
        <button type="submit"  class="btn btn-primary">Atualizar</button>
    </div>
    </form>
</div>


</body>
</html>