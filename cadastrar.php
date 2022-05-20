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
					          <input id="user" name="user" type="text" class="validate">
					          <label for="user">Usuário</label>
					        </div>
				        </div>
			        	<div class="row">
				          	<div class="input-field col s12">
					          <input id="email" name="email" type="email" class="validate">
					          <label for="email">Email</label>
					        </div>
				        </div>
			          	<div class="row">
				          	<div class="input-field col s12">
					          <input id="senha" name="senha" type="password" class="validate">
					          <label for="senha">Senha</label>
					        </div>
				        </div>
				        <div class="row">
				        	<button class="btn">Cadastrar</button>
				        </div>
			          </form>
		        </div>
		        <div class="card-action">
		        	<a href="#">Esqueceu a senha?</a>
		          	<a href="index.php" style="float:right">Já tenho conta!</a>		          
		        </div>
		      </div>
		    </div>
		  </div>
	</div>	
</body>
</html>
<?php 


if($_POST){
	$sql = 'INSERT INTO user (nome,email,senha) VALUES ("'.$_POST['user'].'","'.$_POST['email'].'","'.$_POST['senha'].'")';
	$resultado = $con->query($sql);
	if($resultado){
		msg("Cadastrado com sucesso");
		msg("Já pode entrar! =)");
	}else{
		msg("Erro ao cadastrar, tente novamente!");
	}
}

?>