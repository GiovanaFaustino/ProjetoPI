<?php

echo '<link rel="stylesheet" href="../../../css/style.css">';
echo '<link rel="stylesheet" href="../../../css/novostyle.css">';

if (isset($_POST['pesquisaC']) && !empty($_POST['pesquisaC']) && isset($_POST['consultaC']) ){

echo '<h4 class="novotituloremov">Categoria</h4>';
echo '<div class= "novatabelamenor">';
echo '<table class="table table-dark table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">Código da Categoria</th>';
echo '<th scope="col">Prazo de Entrega</th>';
echo '<th scope="col">Descrição</th>';
echo '</tr>';
echo '<thead>';


require '../../../banco/conexao.php';


$pesquisa=$_POST["pesquisaC"];
$_SESSION['pesquisaC'] = $pesquisa;

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