<?php
session_start();
if (isset($_SESSION['nome'])) {
    header('Location: ./painel.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo.css">
    <title>Login</title>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="item"><a href="./">Home</a></li>
        </ul>
    </nav>

    <div class="box">
        <form action="./scripts/_logar.php" autocomplete="off" method="POST">
            <h2>Login</h2>
            <div class="inputBox semefeitoinput">
                <input type="email" name="email" id="email" class="inputUser" required placeholder="xxx@xxxx.com">
                <span>Email</span>
                <i></i>
            </div>
            <div class="inputBox semefeitoinput">
                <input type="password" name="senha" id="senha" class="inputPass" required placeholder="Digite sua senha">
                <span>Senha</span>
                <i></i>
            </div>
            <div class="links">
                <a href="#">Esqueci a senha</a>
                <a href="cadastro.php">Cadastrar-se</a>
            </div>
            <input type="submit" value="Entrar">
        </form>
        <div class="popup_notificacao">
            <?php if(isset($_SESSION['nome'])): ?>
            <div>
                <p>Email ou senha incorreta</p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>