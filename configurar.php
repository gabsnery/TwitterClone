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
			$(document).ready(function () {
				$('#btn_confEmail').click(function() {
					$.ajax({
						url: 'configuracao/confEmail.html',
						success: function(data){
							$('#conf').html(data);
						}
					});	
				});

				$('#btn_confPass').click(function() {
					$.ajax({
						url: 'configuracao/confPass.html',
						success: function(data){
							$('#conf').html(data);
						}
					});	
				});

				$('#btn_confUser').click(function() {
					$.ajax({
						url: 'configuracao/confUser.html',
						success: function(data){
							$('#conf').html(data);
						}
					});	
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
							<li><a href="home.php">Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div> <!--/<div class="container">-->
	    </nav>


	    <div class="container">
	    	<div class="col-md-3"> <!-- Usuario, contagem de tweets e seguidores-->
		 			<div class="panel panel-default">
		 				<div class="panel-body">
		 					<h4><?= $_SESSION['user']?></h4>
														 <button type="button" id="btn_confEmail" class="btn btn-link" ><h4>Mudar E-mail</h4></button>
                             <button type="button" id="btn_confUser"  class="btn btn-link" ><h4>Mudar Usuario</h4></button>
                             <button type="button" id="btn_confPass"  class="btn btn-link" ><h4>Mudar Senha</h4></button>
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
						 <div id="conf" name="" class="list-group"></div>
				</div><!--TWEET-->
	

		</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>