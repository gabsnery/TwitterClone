<?php
	//  IF TERNARIO
	//      |  CONDIÇÃO         |SE VERDADEIRO   | SE FALSO
	
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
	
	switch ($erro) {
		case 1:
				$result = 'Usuário e ou senha inválido(s)!';
			break;
		default:
			break;
	}

	$pagina = 'index';
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">


		<title>Twitter Clone</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
		<script>

		// SE O ARQUIVO CARREGOU COM SUCESSO
			$(document).ready( function(){

				// NO CLICK DO BOTÃO DE LOGIN
				$('#btn_login').click(function(){

					var campo_vazio = false;
					//TESTA USUARIO
					if($('#campo_user').val() == ''){
						$('#campo_user').css({'border-color':'#A94442'});
						campo_vazio = true;
					}else{
						$('#campo_user').css({'border-color':''});
					}
					//TESTE SENHA
					if($('#campo_password').val() == ''){
						$('#campo_password').css({'border-color':'#A94442'});
						campo_vazio = true;
					}else{
						$('#campo_password').css({'border-color':''});
					}

					//SE ALGUM CAMPO ESTIVER VAZIO NÃO DÁ O SUBMIT DO FORM
					if (campo_vazio == true) return false;
				});//$('#btn_login').click(function(){

			});//$(document).ready( function(){
		</script>
	</head>

	<body>
		<?php include 'header.php';?>	
	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>