
<link rel="stylesheet" href="css/style.css">

<h4 class="obrtitulo">Cadastrar Bibliotecári@</h4>

<div class="obrborder">
    <form class="row g-3 obrform" action="menu\cadastrar\tratarDadosCadastro\dadosBibliotecarioC.php" method="POST">
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
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    
    </form>
</div>