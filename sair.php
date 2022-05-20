<?php
    include('conexao.php');

    session_start();
    unset($_SESSION['logado']);
    session_destroy();
    vai('index.php');
?>