
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

<?php switch ($pagina) {?>
<?php case 'home':?>
    <!-- Static navbar -->
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="sair.php">Sair</a></li>
            <li><a href="configurar.php">Configurar</a></li>
        </ul>
        </div><!--/.nav-collapse -->
    </div> <!--/<div class="container">-->
    </nav>
<?php break;?>
<?php case 'index':?>
		<!-- Static navbar -->	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ?'open' : ''?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<!-- Formulario de login-->
							<form method="post"  id="formLogin" action="verify_access.php">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_user" name="user" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_password" name="password" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
								<p><a href="esqueci_senha.php">Esqueci minha senha</a></p>
								<br /><br />
							</form>
							<?= isset($result) ? "<font color='#FF0000'>$result</font>":''?>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
        </nav>
<?php break;?>
<?php case 'increvase':?>
<div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>

<?php }?>