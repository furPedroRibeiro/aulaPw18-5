<?php
session_start();
$server= 'localhost';
$user = 'root';
$pass = '';
$bd = 'projeto';
$con = new mysqli($server,$user,$pass,$bd);
if(!$con){
	echo "Erro na conexão: ".$con->error;
}
function ListarCategorias(){
	$sql = 'SELECT * FROM categoria ';
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function criarJogo($nome, $categoria){
	$sql = 'INSERT INTO jogo VALUES(null, "'.$nome.'", '.$_SESSION['cd'].','.$categoria.')';
	$res = $GLOBALS['con']->query($sql);
	if($res){
		msg("Jogo Cadastrado!");
	} else{
		msg("Erro ao cadastrar jogo :(");
	}
}
function ListarJogos($usuario){
	$sql = 'SELECT * FROM jogo WHERE id_usuario='.$usuario;
	$res = $GLOBALS['con']->query($sql);
	return $res;
}
function Proteger(){
	if(!$_SESSION['logado']){
		vai('index.php');
	}
}
function msg($texto){
	echo '<script>
	  M.toast({html: "'.$texto.'"});
	</script>';
}
function vai($pagina){
	echo '<script>
			window.location = "'.$pagina.'";
		</script>';
}
