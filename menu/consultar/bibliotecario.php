<link rel="stylesheet" href="css/style.css">


<div class="atu_border">
    <form class="d-flex" action="menu\consultar\tratarDadosConsultar\consultaBibliotecarioC.php" method="POST">
            <input class="form-control me-2" type="search" name="pesquisaBibliotecarioC" placeholder="Digite o ID do Bibliotecário" aria-label="Search" required>
            <button class="btn btn-outline-success" name="consultaBibliotecarioC" type="submit">Buscar</button>
    </form>
</div>


<?php

echo '<br><br>';
echo '<div style="width:60%; margin-left:auto; margin-right:auto"; text-align:center >';
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

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM bibliotecario";
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


?>