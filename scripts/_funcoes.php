<?php

function converterData(){
    $data = str_replace("/", "-", $_POST['nascimento']);
    $data = date('Y-m-d', strtotime($data));
    return $data;
};
function converterCelular(){
    $procurar = array("(", ")", " ", "-");
    $celular = str_replace($procurar, '', $_POST['celular']);
    return $celular;
}

?>