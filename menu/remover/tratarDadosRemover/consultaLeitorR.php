<html>
<head>
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/novostyle.css">
</head>
<body>
<?php

if (isset($_POST['pesquisaLeitorR']) && !empty($_POST['pesquisaLeitorR']) && isset($_POST['consultaLeitorR']) ){

echo '<h4 class="novotituloremov">Leitor</h4>';
echo '<div class= "novatabelaobra">';
echo '<table class="table table-dark table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">ID</th>';
echo '<th scope="col">Nome</th>';
echo '<th scope="col">CPF</th>';
echo '<th scope="col">email</th>';
echo '<th scope="col">Telefone</th>';
echo '<th scope="col">Senha</th>';
echo '</tr>';
echo '</thead>';


require '../../../banco/conexao.php';


$pesquisa=$_POST["pesquisaLeitorR"];
$_SESSION['pesquisaLeitorR'] = $pesquisa;

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM leitor WHERE id_leitor = $pesquisa";
$stmt = $con->query($sql) or die(mysqli->error);


while($consulta = $stmt->fetch_array()){
    echo '<tr>';
    echo '<td>'.$consulta['id_leitor'].'</td>';
    echo '<td>'.$consulta['nome_leitor'].'</td>';
    echo '<td>'.$consulta['cpf_leitor'].'</td>';
    echo '<td>'.$consulta['email_leitor'].'</td>';
    echo '<td>'.$consulta['telefone_leitor'].'</td>';
    echo '<td>'.$consulta['senha_leitor'].'</td>';
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

<div class="novadivremov">
    <form class="row g-3 obrform" action="dadosLeitorR.php" method="POST">
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Remover Leitor</button>
    </div>
    </form>
</div>
</body>
</html>