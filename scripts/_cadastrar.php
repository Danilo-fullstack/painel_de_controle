<?php
session_start();
include './_conexao.php';

function converterData(){
    $data = str_replace("/", "-", $_POST['nascimento']);
    $data = date('Y-m-d', strtotime($data));
    return $data;
};

if(!empty($_POST['email']) && !empty($_POST['nome']) && !empty($_POST['senha']) && !empty($_POST['nascimento']) && !empty($_POST['celular']) && !empty($_POST['cidade']) && !empty($_POST['uf']) && !empty($_POST['sexo'])) {
    $form = [
        'email' => trim($_POST['email']),
        'nome' => trim($_POST['nome']),
        'senha' => trim($_POST['senha']),
        'nascimento' => trim(converterData()),
        'celular' => trim($_POST['celular']),
        'cidade' => trim($_POST['cidade']),
        'uf' => trim($_POST['uf']),
        'sexo' => trim($_POST['sexo'])
    ];
} else {
    header('Location: ../cadastrar.php');
}
print_r($form);


?>