<link rel="stylesheet" href="css/style.css">


<div class="atu_border">
    <form class="d-flex" action="menu\consultar\tratarDadosConsultar\consultaExemplarC.php" method="POST">
            <input class="form-control me-2" type="search" name="pesquisaExemplarC" placeholder="Digite o Código do Exemplar" aria-label="Search" required>
            <button class="btn btn-outline-success" name="consultaExemplarC" type="submit">Buscar</button>
    </form>
</div>

<?php

echo '<br><br>';
echo '<div style="width:60%; margin-left:auto; margin-right:auto"; text-align:center >';
echo '<table class="table table-dark table-hover">';
echo '<thead>';
echo '<tr>';
echo '<th scope="col">Código do Exemplar</th>';
echo '<th scope="col">ISBN</th>';
echo '</tr>';
echo '</thead>';


$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM exemplar ";
$stmt = $con->query($sql) or die(mysqli->error);


while($consulta = $stmt->fetch_array()){
    echo '<tr>';
    echo '<td>'.$consulta['codigoExemplar'].'</td>';
    echo '<td>'.$consulta['ISBN'].'</td>';
    echo '</tr>';

}


echo '</table>';
echo '</div>';


?>
