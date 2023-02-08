<?php
include('./scripts/_verifica_login.php');

if(isset($_SESSION['nome']) == true) {
    echo 'Nome existe';
    echo '</br>Aqui está: ', $_SESSION['nome'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Painel de Controle</title>
</head>
<body>
    <a href="./scripts/_logout.php">Sair</a>
    <nav>
        <ul class="menu">
            <li class="item"><a href="./">Home</a></li>
        </ul>
    </nav>
    <div class="texto-index">
        <p>Olá, seja bem vindo ao Painel de Controle!</p>
    </div>

    <div class="botoes-index">
        <div>
            <a href="./login.php">Entrar</a>
        </div>
        <div>
            <a href="./cadastro.php">Cadastrar</a>
        </div>
    </div>
</body>
</html>