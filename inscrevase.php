<?php
		$erro_usuario = isset($_GET['erro_usuario']) ?$_GET['erro_usuario']:0 ;
		$erro_email = isset($_GET['erro_email']) ?$_GET['erro_email']:0;
		$pagina = 'increvase';
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
	
	</head>

	<body>
		<?php include 'header.php';?>	
		<!-- Static navbar -->
	    <div class="container">
	    	
	    	<br /><br />

	    	<div class="col-md-4"></div>
	    	<div class="col-md-4">
	    		<h3>Inscreva-se já.</h3>
	    		<br />
				<form method="POST" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="user" name="user" placeholder="User" required="requiored">
						<?php
							if($erro_usuario){
								echo '<font style = "color:#ff0000"#ff0000>Usuário já existe!</font>';
							}
						?>
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
						<?php
							if($erro_email){
								echo '<font style = "color:#ff0000"#ff0000>Email já existe!</font>';
							}
						?>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="password" name="password" placeholder="password" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>