<?php
    include ("./scripts/_verifica_login.php");
    include ("./scripts/_funcoes.php");
    include ("./scripts/_conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Listar</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="item"><a href="./painel.php">Home</a></li>
            <li class="item"><a href="./cadastro.php">Cadastrar</a></li>
            <li class="item"><a href="./listagem.php">Listar</a></li>
        </ul>
        <div class="sair">
            <a href="./scripts/_logout.php">Sair</a>
        </div>
    </nav>

    <?php
        // listagemHtml();

        $sql = "select * from usuarios";
        $result = mysqli_query($conexao, $sql);

        while($row_users = mysqli_fetch_assoc($result)) {
        //     echo "ID: ". $row_users['id']. "<br>";
        //     echo "Nome: ". $row_users['nome']. "<br>";
        //     echo "Email: ". $row_users['email']. "<br>";
        //     echo "Data de Nascimento: ". $row_users['nascimento']. "<br>";
        //     echo "Cidade: ". $row_users['cidade']. "<br><br>";
        // }
    ?>
        <div class="box box-listagem">
            <div class="box-lista-user">
                <p>ID: <?php echo $row_users['id']; ?></p>
                <p>Nome: <?php echo $row_users['nome']; ?></p>
            </div>
        </div>
    <?php } ?>
</body>
</html>