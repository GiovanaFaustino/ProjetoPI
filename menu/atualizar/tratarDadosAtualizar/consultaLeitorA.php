<html>
<head>
<link rel="stylesheet" href="../../../css/style.css">
<link rel="stylesheet" href="../../../css/novostyle.css">
</head>
<body>
<?php

if (isset($_POST['pesquisaLeitor']) && !empty($_POST['pesquisaLeitor']) && isset($_POST['consultaLeitor']) ){

echo '<h4 class="novotitulo">Leitor(a)</h4>';
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


$pesquisa=$_POST["pesquisaLeitor"];
$_SESSION['pesquisaLeitor'] = $pesquisa;

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

<h4 class="novotitulo">Atualizar Leitor</h4>

<div class="obrborder">
    <form class="row g-3 obrform" action="dadosLeitorA.php" method="POST">
    <div class="col-md-7">
        <label for="inputNomeLei4" class="form-label">Nome</label>
        <input type="text" name="nomeLeitor" class="form-control" id="inputNomeLei4" required>
    </div>
    <div class="col-5">
        <label for="inputCpfLei" class="form-label">CPF</label>
        <input type="text" name="cpfLeitor" class="form-control" id="inputCpfLei" required>
    </div>
    <div class="col-md-7">
        <label for="inputEmailLei4" class="form-label">E-mail</label>
        <input type="email" name="emailLeitor" class="form-control" id="inputEmailLei4">
    </div>
    <div class="col-md-5">
        <label for="inputTelefoneLei4" class="form-label">Telefone</label>
        <input type="text" name="telefoneLeitor" class="form-control" id="inputTelefoneLei4" placeholder="( )">
    </div>
    <div class="col-md-5">
        <label for="inputSenhaLeitor" class="form-label">Senha</label>
        <input type="password" name="senhaLeitor" class="form-control" id="inputSenhaLeitor" placeholder="">
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
    </form>
</div>
</body>
</html>