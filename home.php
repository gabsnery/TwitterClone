<?php
     session_start();

		 //echo $_COOKIE["user"];

		 
     if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
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
	
		<script type="text/javascript">

				$(document).ready(function () {
					$('#btn_tweet').click(function(){
						if ($('#texto_tweet').val().length > 0){
							
							$.ajax({
								url: 'inclui_tweet.php',
								method: 'post',
								data: {tweet : $('#texto_tweet').val()},
								success: function(data){
									alert(data);
								}
							});
						}
					});	
				});

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
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div> <!--/<div class="container">-->
	    </nav>


	    <div class="container">
	    	<div class="col-md-3"> <!-- Usuario, contagem de tweets e seguidores-->
		 			<div class="panel panel-default">
		 				<div class="panel-body">
		 					<h4><?= $_SESSION['user']?></h4>
		 					<hr/>
							<div class="col-md-6">TWEETS<br/> 1</div>
							<div class="col-md-6">SEGUIDORES</br> 1</div>
						 </div>
					 </div>
				</div> <!--/ Usuario, contagem de tweets e seguidores-->
	    	<div class="col-md-6"><!--TWEET-->	
		 				<div class="panel panel-default">
		 					<div class="panel-body">
							 	<div class="input-group">
		 							<input type="text" id="texto_tweet" class="form-control" placeholder = "O que está acontecendo agora?" maxlength = "140">
									 <span class = "input-group-btn">
		 								<button class="btn btn-default" id="btn_tweet" type = "button">Tweet</button>
									 </span>
								 </div>
							 </div>
						 </div>
				</div><!--TWEET-->
			<div class="col-md-3">	
		 		<div class="panel panel-default">
		 		  <div class="panel-body">
		 				<h4><a href="#">Procurar amigos</a></h4>
					</div>
				</div>
			</div>

		</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>