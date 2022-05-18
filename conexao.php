<?php
    session_start();
    $server = 'localhost';
    $usuario = 'root';
    $pass = '';
    $bd = 'projeto';
    $con = new mysqli($server,$usuario,$pass,$bd);
    if(!$con){
        echo "Erro na conexão: ".$con->error;
    }
    function Proteger(){
        if(!$_SESSION['logado']){
            vai('index.php');
        }
    }
    function msg($texto){
        echo '<script>M.toast({html: "'.$texto.'"});</script>';
    }
    function  vai($pagina){
        echo '<script>window.location = "'.$pagina.'";</script>';
    }
?>