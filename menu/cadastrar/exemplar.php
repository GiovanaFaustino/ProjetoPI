
<link rel="stylesheet" href="css/style.css">

<h4 class="cattitulo">Cadastrar Exemplar</h4>

<div class="catborder">
    <form class="row g-3 catform" action="menu\cadastrar\tratarDadosCadastro\dadosExemplarC.php" method="POST">
    <div class="col-md-6">
        <label for="inputCodExemplar" class="form-label">Código exemplar</label>
        <input type="text" name="codExemplar" class="form-control" id="inputCodExemplar">
    </div>
    <div class="col-6">
        <label for="inputISBN" class="form-label">ISBN</label>
        <input type="text" name="ISBNExemplar" class="form-control" id="inputISBN" placeholder="De obra já existente" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </form>
</div>