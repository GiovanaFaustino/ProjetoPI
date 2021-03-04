<link rel="stylesheet" href="css/style.css">


<div class="atu_border">
    <form class="d-flex" action="menu\consultar\tratarDadosConsultar\consultaObraC.php" method="POST">
            <input class="form-control me-2" type="search" name="pesquisaObraC" placeholder="Digite o ISBN do Livro" aria-label="Search" required>
            <button class="btn btn-outline-success" name="consultaObraC" type="submit">Buscar</button>
    </form>
</div>



<br><br>
<div style="width:60%; margin-left:auto; margin-right:auto"; text-align:center >
<table class="table table-dark table-hover">
<thead>
<tr>
<th scope="col">ISBN</th>
<th scope="col">Título</th>
<th scope="col">Autor</th>
<th scope="col">Data de Publicação</th>
<th scope="col">Edição</th>
<th scope="col">Editora</th>
<th scope="col">Código da Categoria</th>
</tr>
</thead>

<?php

$con = new mysqli("localhost","root","g88745059","biblioteca");
$sql = "SELECT * FROM obra ";
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
?>

</table>
</div>
