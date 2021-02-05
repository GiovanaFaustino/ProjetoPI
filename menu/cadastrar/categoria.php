
<link rel="stylesheet" href="css/style.css">

<h4 class="cattitulo">Cadastrar Categoria</h4>

<div class="catborder">
    <form class="row g-3 catform" action="menu\cadastrar\tratarDadosCadastro\dadosCategoriaC.php" method="POST">
    <div class="col-md-6">
        <label for="inputCod4" class="form-label">Código da Categoria</label>
        <input type="text" name="codigoCategoria" class="form-control" id="inputCod4"placeholder="De categoria já existente">
    </div>
    <div class="col-6">
        <label for="inputPrazo" class="form-label">Prazo Máximo de Entrega</label>
        <input type="text" name="dataDeEntregaCategoria" class="form-control" id="inputPrazo" placeholder="DD/MM/AAAA" required>
    </div>
    <div class="col-md-12">
        <label for="inputDescricao4" class="form-label">Descrição</label>
        <textarea class="form-control" name="descricaoCategoria" aria-label="With textarea"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </form>
</div>