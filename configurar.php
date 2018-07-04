<?php
     session_start();

		 //echo $_COOKIE["user"];

		 
     if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
    }
		 
    $id_user = $_SESSION['id'];
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
	
		<script type="text/javascript">


		</script>
		</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
				<li><a href="configurar.php">Configurar</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div> <!--/<div class="container">-->
	    </nav>


	    <div class="container">
	    	<div class="col-md-3"> <!-- Usuario, contagem de tweets e seguidores-->
		 			<div class="panel panel-default">
		 				<div class="panel-body">
		 					<h4><?= $_SESSION['user']?></h4>
                             <h4><a href="procurar_pessoas.php">Mudar E-mail</a></h4>
                             <h4><a href="procurar_pessoas.php">Mudar Usuario</a></h4>
                             <h4><a href="procurar_pessoas.php">Mudar Senha</a></h4>
                    	 </div>
					 </div>
				</div> <!--/ Usuario, contagem de tweets e seguidores-->
	    	<div class="col-md-9"><!--TWEET-->	
		 				<div class="panel panel-default">
		 					<div class="panel-body">
							 	<form class="input-group" id="form_tweet">
								 </form><!--<form class="panel-body">-->
							 </div> 
						 </div>
						 <div id="tweets" name="" class="list-group"></div>
				</div><!--TWEET-->
	

		</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>