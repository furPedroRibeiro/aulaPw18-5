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
	$res = $GLOBAL['con']->query($sql);
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
