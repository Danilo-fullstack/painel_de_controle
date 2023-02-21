<?php
session_start();
include './_conexao.php';
include './_funcoes.php';

if(!empty($_POST['email']) && !empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['nascimento']) && !empty($_POST['celular']) && !empty($_POST['cidade']) && !empty($_POST['uf']) && !empty($_POST['cep']) && !empty($_POST['sexo']) && !empty($_POST['tipo'])) {
    $form = [
        'email' => trim($_POST['email']),
        'nome' => trim($_POST['nome']),
        'senha' => trim(md5($_POST['senha'])),
        'nascimento' => trim(converterData()),
        'celular' => trim(converterCelular()),
        'cidade' => trim($_POST['cidade']),
        'uf' => trim($_POST['uf']),
        'cep' => trim(str_replace("-", "", $_POST['cep'])),
        'sexo' => trim($_POST['sexo']),
        'tipo' => trim($_POST['tipo'])
    ];
    // print_r($form);
    $_SESSION['popup_notificacao'] = true;

    $sql = "select nome, id from usuarios where email = '$form[email]'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);
    
    if(!$row == 1) {
        $sql = "insert into usuarios values (default, '$form[tipo]', '$form[nome]', '$form[nascimento]', '$form[sexo]', '$form[email]', '$form[senha]', '$form[celular]', '$form[cidade]', '$form[uf]', '$form[cep]')";
        $result = mysqli_query($conexao, $sql);

        // echo '</br> Usuário Cadastrado';
        if ($result == 1) {
            $_SESSION['nomecadastrado'] = $form['nome'];
            header('Location: ../cadastro.php');
            
        } else {
            $_SESSION['errocadastro'] = true;
        }

    } else {
        $_SESSION['userexiste'] = true;
        header('Location: ../cadastro.php');
    }

} else {
    header('Location: ../cadastro.php');
}



?>