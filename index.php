<?php include ('conexao.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Projeto</title>
	<meta charset="utf-8">
	  <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<body>
	<div class="container">
		 <div class="row meio">
		    <div class="col s6 offset-s3 m6 offset-m3">
		      <div class="card">
		        <div class="card-content login">
		          <span class="card-title center">Bem vindo ao Projeto!</span>
			          <form class="form white-text" method="post">
			          	<div class="row">
				          	<div class="input-field col s12">
					          <input id="user" name="user" type="email" class="validate">
					          <label for="user">Usuário</label>
					        </div>
				        </div>
			          	<div class="row">
				          	<div class="input-field col s12">
					          <input id="senha" name="senha" type="password" class="validate">
					          <label for="senha">Senha</label>
					        </div>
				        </div>
				        <div class="row">
				        	<button class="btn">Entrar</button>
				        </div>
			          </form>
		        </div>
		        <div class="card-action">
		        	<a href="#">Esqueceu a senha?</a>
		          	<a href="cadastrar.php" style="float:right">Cadastre-se agora!</a>		          
		        </div>
		      </div>
		    </div>
		  </div>
	</div>	
</body>
</html>
<?php
if($_POST){
	$sql = 'SELECT * FROM user WHERE 
			email ="'.$_POST['user'].'" 
			AND senha ="'.$_POST['senha'].'"';
	$res = $con->query($sql);
	if($res->num_rows > 0){
		//usuário existe
		$user = $res->fetch_object();
		$_SESSION['cd'] = $user->cd;
		$_SESSION['nome'] = $user->nome;
		$_SESSION['email'] = $user->email;
		$_SESSION['foto'] = $user->foto;
		$_SESSION['logado'] = true;
		vai('home.php');
	}else{
		//não existe
		msg("Usuário e/ou senha Inválidos!");
	}
}
?>