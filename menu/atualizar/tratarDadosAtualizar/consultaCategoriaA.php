<html>
<head>
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/novostyle.css">
</head>
<body>
<?php

if (isset($_POST['pesquisa']) && !empty($_POST['pesquisa']) && isset($_POST['consulta']) ){

echo '<h4 class="novotitulo">Categoria</h4>';
echo '<div class= "novatabela">';
echo '<table class="table table-dark table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">Código da Categoria</th>';
echo '<th scope="col">Prazo de Entrega</th>';
echo '<th scope="col">Descrição</th>';
echo '</tr>';
echo '</thead>';


require '../../../banco/conexao.php';


$pesquisa=$_POST["pesquisa"];
$_SESSION['pesquisa'] = $pesquisa;

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM categoria WHERE codigoCategoria = $pesquisa";
$stmt = $con->query($sql) or die(mysqli->error);


while($consulta = $stmt->fetch_array()){
    echo '<tr>';
    echo '<td>'.$consulta['codigoCategoria'].'</td>';
    echo '<td>'.$consulta['prazoDeEntrega'].'</td>';
    echo '<td>'.$consulta['descricao'].'</td>';
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

<h4 class="novotitulo">Atualizar Categoria</h4>

<div class="catborder">
    <form class="row g-3 catform" action="dadosCategoriaA.php" method="POST">
    
    <div class="col-6">
        <label for="inputPrazo" class="form-label">Prazo Máximo de Entrega</label>
        <input type="text" name="dataDeEntregaCategoria" class="form-control" id="inputPrazo" placeholder="DD/MM/AAAA" required>
    </div>
    <div class="col-md-12">
        <label for="inputDescricao4" class="form-label">Descrição</label>
        <textarea class="form-control" name="descricaoCategoria" aria-label="With textarea"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
    </form>
</div>


</body>
</html>