
<link rel="stylesheet" href="css/style.css">

<h4 class="obrtitulo">Cadastrar Leitor</h4>

<div class="obrborder">
    <form class="row g-3 obrform" action="menu\cadastrar\tratarDadosCadastro\dadosLeitorC.php" method="POST">
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
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    </form>
</div>