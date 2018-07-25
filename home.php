<?php
     session_start();

		 //echo $_COOKIE["user"];
	
		 
     if (!isset($_SESSION['user'])){
        header('Location:index.php?erro=2');
		 }

	require_once('db.class.php');
		
    $id_user = $_SESSION['id'];
	$pagina = 'home';

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

					
/* 					function atualizaPainel() {

						$.ajax({
							url: 'atualiza_painel.php',
							success: function(data){
								var quantidade_seguidores = $(this).data('quantidade_seguidores');
								$('#quantidade_seguidores').html(quantidade_seguidores);
								var quantidade_tweets = $(this).data('quantidade_tweets');
								$('#quantidade_tweets').html(quantidade_tweets);
								alert(data);
								alert(quantidade_tweets);
								alert(quantidade_seguidores);
							}
						});

					} */
					$('#btn_tweet').click(function(){
						if ($('#texto_tweet').val().length > 0){
							
							$.ajax({
								url: 'inclui_tweet.php',
								method: 'post',
								data: $('#form_tweet').serialize(),
								success: function(data){
									$('#texto_tweet').val('');
									atualizaTweet();
								}
							});
						}
					});	

					function atualizaTweet() {

						$.ajax({
							url: 'get_tweet.php',
							success: function(data){
								$('#tweets').html(data);
							}
						});
						// atualizaPainel();
					}
					atualizaTweet();
				});

		</script>
		</head>

	<body>
	<?php include 'header.php';?>	
	    <div class="container">
			<?php include 'menuleft.php';?>
	    	<div class="col-md-6"><!--TWEET-->	
		 				<div class="panel panel-default">
		 					<div class="panel-body">
							 	<form class="input-group" id="form_tweet">

		 							<input type="text" name="texto_tweet" id="texto_tweet" class="form-control" placeholder = "O que está acontecendo agora?" maxlength = "140">
									 <span class = "input-group-btn">
		 								<button class="btn btn-default" id="btn_tweet"  type = "button">Tweet</button>
									 </span>

								 </form><!--<form class="panel-body">-->
							 </div> 
						 </div>
						 <div id="tweets" name="" class="list-group"></div>
				</div><!--TWEET-->
			<div class="col-md-3">	
		 		<div class="panel panel-default">
		 		  <div class="panel-body">
		 				<h4><a href="procurar_pessoas.php">Procurar amigos</a></h4>
					</div>
				</div>
			</div>
			
		</div>
		</div>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>