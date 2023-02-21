<?php
include ("./scripts/_verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Remover</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="item"><a href="./painel.php">Home</a></li>
            <li class="item"><a href="./cadastro.php">Cadastrar</a></li>
            <li class="item"><a href="./listagem.php">Listar</a></li>
            <li class="item"><a href="./atualizacao.php">Atualizar</a></li>
            <li class="item"><a href="./remocao.php">Deletar</a></li>
        </ul>
        <div class="sair">
            <a href="./scripts/_logout.php">Sair</a>
        </div>
    </nav>
</body>
</html>