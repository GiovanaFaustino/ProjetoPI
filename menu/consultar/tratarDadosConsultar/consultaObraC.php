
<?php

echo '<link rel="stylesheet" href="../../../css/style.css">';
echo '<link rel="stylesheet" href="../../../css/novostyle.css">';

if (isset($_POST['pesquisaObraC']) && !empty($_POST['pesquisaObraC']) && isset($_POST['consultaObraC']) ){

echo '<h4 class="novotituloremov">Obra</h4>';
echo '<div class= "novatabelaobra">';
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
echo '<thead>';


require '../../../banco/conexao.php';


$pesquisa=$_POST["pesquisaObraC"];
$_SESSION['pesquisaObraC'] = $pesquisa;

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
