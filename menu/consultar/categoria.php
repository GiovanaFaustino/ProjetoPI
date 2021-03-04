<link rel="stylesheet" href="css/style.css">


<div class="atu_border">
    <form class="d-flex" action="menu\consultar\tratarDadosConsultar\consultaCategoriaC.php" method="POST">
            <input class="form-control me-2" name="pesquisaC" type="search" placeholder="Digite o Código da Categoria" aria-label="Search" required>
            <button class="btn btn-outline-success" name="consultaC" type="submit">Buscar</button>
    </form>
</div>

<?php

echo '<br><br>';
echo '<div style="width:60%; margin-left:auto; margin-right:auto"; text-align:center >';
echo '<table class="table table-dark table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">Código da Categoria</th>';
echo '<th scope="col">Prazo de Entrega</th>';
echo '<th scope="col">Descrição</th>';
echo '</tr>';
echo '</thead>';

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM categoria ";
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


?>