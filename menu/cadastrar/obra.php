
<link rel="stylesheet" href="css/style.css">

<h4 class="obrtitulo">Cadastrar Obra</h4>

<div class="obrborder">
    <form class="row g-3 obrform" action="menu\cadastrar\tratarDadosCadastro\dadosObraC.php" method="POST">
    <div class="col-md-6">
        <label for="inputISBN4" class="form-label">ISBN</label>
        <input type="text" name="ISBNObra" class="form-control" id="inputISBN4" required>
    </div>
    <div class="col-6">
        <label for="inputTitulo" class="form-label">Título</label>
        <input type="text" name="tituloObra" class="form-control" id="inputTitulo" required>
    </div>
    <div class="col-md-6">
        <label for="inputAutor4" class="form-label">Autor</label>
        <input type="text" name="autorObra" class="form-control" id="inputAutor4">
    </div>
    <div class="col-md-6">
        <label for="inputData4" class="form-label">Data de Publicação</label>
        <input type="text" name="dataDePublicacaoObra" class="form-control" id="inputData4" placeholder="DD/MM/AAAA">
    </div>
    <div class="col-md-6">
        <label for="inputEdicao4" class="form-label">Edição</label>
        <input type="text" name="edicaoObra" class="form-control" id="inputEdicao4">
    </div>
    <div class="col-md-6">
        <label for="inputEditora4" class="form-label">Editora</label>
        <input type="text" name="editora" class="form-control" id="inputEditora4">
    </div>
    <div class="col-md-6">
        <label for="inputCodCat4" class="form-label">Código da Categoria</label>
        <input type="text" name="codigoCategoriaObra" class="form-control" id="inputCodCat4" required>
    </div>
    <div class="col-12">
        <button type="submit"  class="btn btn-primary">Cadastrar</button>
    </div>
    </form>
</div>