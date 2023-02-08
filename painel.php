<?php
    include("./scripts/_verifica_login.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>
<body>
    <p>Olá <?php echo $_SESSION['nome']; ?>!</br>Bem vindo ao painel</p>

    <a href="./scripts/_logout.php">Sair</a>
</body>
</html>