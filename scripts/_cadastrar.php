<?php
session_start();
include './_conexao.php';
include './_funcoes.php';

if(!empty($_POST['email']) && !empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['nascimento']) && !empty($_POST['celular']) && !empty($_POST['cidade']) && !empty($_POST['uf']) && !empty($_POST['cep']) && !empty($_POST['sexo'])) {
    $form = [
        'email' => trim($_POST['email']),
        'nome' => trim($_POST['nome']),
        'senha' => trim(md5($_POST['senha'])),
        'nascimento' => trim(converterData()),
        'celular' => trim(converterCelular()),
        'cidade' => trim($_POST['cidade']),
        'uf' => trim($_POST['uf']),
        'cep' => trim(str_replace("-", "", $_POST['cep'])),
        'sexo' => trim($_POST['sexo'])
    ];
    print_r($form);

    $sql = "select nome, id from usuarios where email = '$form[email]'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_num_rows($result);
    
    if(!$row == 1) {
        $sql = "insert into usuarios values (default, '$form[nome]', '$form[nascimento]', '$form[sexo]', '$form[email]', '$form[senha]', '$form[celular]', '$form[cidade]', '$form[uf]', '$form[cep]')";
        $result = mysqli_query($conexao, $sql);

        // echo '</br> Usuário Cadastrado';

        if ($result == 1):
            $_SESSION['nome'] = $form['nome'];
            header('Location: ../painel.php');
        endif;
    } else {
        $_SESSION['userexiste'] = true;
        header('Location: ../cadastro.php');
    }

} else {
    header('Location: ../cadastrar.php');
}



?>