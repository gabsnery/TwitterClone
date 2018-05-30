<?php 
	//  IF TERNARIO
	//      |  CONDIÇÃO         |SE VERDADEIRO   | SE FALSO
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

	switch ($erro) {
		case 1:
			$return = "Usuário ou senha inválido(s)!";
			break;
		default:
			break;
	}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">


		<title>Twitter clone</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<script>
			// código javascript						
		</script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="<?= $return != "" ? 'false' : 'true' ?>" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />

							<!-- Formulario de login-->

							<form method="post"  id="formLogin" action="verify_access.php">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_user" name="user" placeholder="User" />
								</div>

								<div class="form-group">
									<input type="password" class="form-control red" id="campo_password" name="password" placeholder="Password" />
								</div>

								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
								<br /><br />
							</form>

							<?php
									echo $return ? $return : "";
							?>

							<!--Fecha Formulario de login-->

						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>