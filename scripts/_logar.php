<?php
session_start();
include './_conexao.php';

if(!empty($_POST['email']) && !empty($_POST['senha'])) {
    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);
} else {
    header('Location: ../login.php');
}

$sql = "select nome from usuarios where email = '$email' and senha = md5('$senha')";
$result = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);

if($row == 1) {
    $usuario_bd = mysqli_fetch_assoc($result);
    $_SESSION['nome'] = $usuario_bd['nome'];
    $_SESSION['autenticado'] = true;
    header('Location: ../painel.php');
    exit();
}

$_SESSION['autenticado'] = false;
header('Location: ../login.php');
exit();
?>