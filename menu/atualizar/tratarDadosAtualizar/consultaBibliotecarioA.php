<html>
<head>
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/novostyle.css">
</head>
<body>
<?php

if (isset($_POST['pesquisaBibliotecario']) && !empty($_POST['pesquisaBibliotecario']) && isset($_POST['consultaBibliotecario']) ){

echo '<h4 class="novotitulo">Bibliotecario(a)</h4>';
echo '<div class= "novatabela">';
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


$pesquisa=$_POST["pesquisaBibliotecario"];
$_SESSION['pesquisaBibliotecario'] = $pesquisa;

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM bibliotecario WHERE idusuario = $pesquisa";
$stmt = $con->query($sql) or die(mysqli->error);


while($consulta = $stmt->fetch_array()){
    echo '<tr>';
    echo '<td>'.$consulta['idusuario'].'</td>';
    echo '<td>'.$consulta['nome'].'</td>';
    echo '<td>'.$consulta['cpf'].'</td>';
    echo '<td>'.$consulta['email'].'</td>';
    echo '<td>'.$consulta['telefone'].'</td>';
    echo '<td>'.$consulta['senha'].'</td>';
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

<h4 class="novotitulo">Atualizar Bibliotecario</h4>

<div class="obrborder">
    <form class="row g-3 obrform" action="dadosBibliotecarioA.php" method="POST">
    <div class="col-md-7">
        <label for="inputNomeBibl4" class="form-label">Nome</label>
        <input type="text" name="nomeBibliotecario" class="form-control" id="inputNomeBibl4" required>
    </div>
    <div class="col-5">
        <label for="inputCpfBibl" class="form-label">CPF</label>
    <input type="text" name="cpfBibliotecario" class="form-control" id="inputCpfBibl" required>
    </div>
    <div class="col-md-7">
        <label for="inputEmailBibl4" class="form-label">E-mail</label>
        <input type="email" name="emailBibliotecario" class="form-control" id="inputEmailBibl4">
    </div>
    <div class="col-md-5">
        <label for="inputTelefoneBibl4" class="form-label">Telefone</label>
        <input type="text" name="telefoneBibliotecario" class="form-control" id="inputTelefoneBibl4" placeholder="( )">
    </div>
    <div class="col-md-7">
        <label for="inputPasswordBibl4" class="form-label">Senha</label>
        <input type="password" name="senhaBibliotecario" class="form-control" id="inputEmailBibl4">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
    
    </form>
</div>
</body>
</html>