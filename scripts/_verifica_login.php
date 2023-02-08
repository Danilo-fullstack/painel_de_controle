<?php
session_start();

if (isset($_SESSION['nome'])) {
    header('Location: ./painel.php');
    exit();
}

?>