<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form class="form" action="logar.php" method="POST">
        <div class="card">
            <div class="card-top">
                <img class="imgLogin" src="img/img_login.jpg" alt="">
                <h2 class="title">Painel de Controle</h2>
            </div>
        
            <div class="card-group">
                <!-- <label>ID Usuário</label> -->
                <input type="text" name="idusuario" placeholder="  Digite seu ID de Usuário" required>
            </div>

            <div class="card-group">
                <!-- <label>Senha</label> -->
                <input type="password" name="senha" placeholder="  Digite sua Senha" required>
            </div>

            <div class="card-group btn">
                <button type="submit">ACESSAR</button>
            </div>
        </div>
    </form>

     <!-- JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>