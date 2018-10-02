<?php

	/* script configurado para funcionar com o servi�o de smtp do gmail */
	/* cuidado para n�o expor seus dados de usu�rio e senha de email */
	/* o gmail implementa uma seguran�a para permitir ou n�o o acesso ao seu e-mail atrav�s de aplicativos menos seguros (como � caso), ao efetuar o teste de envio de e-mail consulte sua caixa de mensagem, caso esta configura��o esteja desabilitada voc� receber� um e-mail do google questionando se deve ou n�o habilitar tal acesso */
  $email = $_POST['email'];

	require_once('db.class.php');
	require 'PHPMailer\PHPMailerAutoload.php';

	$arq = '';
	if (file_exists("../configTwitter.ini")) {
		$arq = parse_ini_file("../configTwitter.ini");
	} else {
		throw new Exception("arquivo $name nao encontrado");
	}

	function geraSenha($tamanho = 5, $maiusculas = true, $numeros = true, $simbolos = true)
	{	
		/**
		* Função para gerar senhas aleatórias
		*
		* @author    Thiago Belem <contato@thiagobelem.net>
		*
		* @param integer $tamanho Tamanho da senha a ser gerada
		* @param boolean $maiusculas Se terá letras maiúsculas
		* @param boolean $numeros Se terá números
		* @param boolean $simbolos Se terá símbolos
		*
		* @return string A senha gerada
		*/
		$lmin = 'abcdefghijklmnopqrstuvwxyz';
		$lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$num = '1234567890';
		$simb = '!@#$*-';
		$retorno = '';
		$caracteres = '';
		$caracteres .= $lmin;
		if ($maiusculas) $caracteres .= $lmai;
		if ($numeros) $caracteres .= $num;
		if ($simbolos) $caracteres .= $simb;
		$len = strlen($caracteres);

		for ($n = 1; $n <= $tamanho; $n++) {
			$rand = mt_rand(1, $len);
			$retorno .= $caracteres[$rand-1];
		}
		return $retorno;
	}
	$novaSenha = geraSenha();

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$senhaEmail = $novaSenha;


	$sql = "update users set password = '".md5($novaSenha)."' where email = '$email'";

	//executar a query
	if(mysqli_query($link, $sql)){
			echo "Senha Alterada com sucesso!";
	}else{
			echo $sql;
	}

	
	$password_email = isset($arq['pass_email']) ? $arq['pass_email'] : NULL;
	$email = isset($arq['email']) ? $arq['email'] : NULL ; 

	//configura��es b�sicas de endere�o e protoloco 
	$mail = new PHPMailer; //faz a inst�ncia do objeto PHPMailer
	//$mail->SMTPDebug = true; //habilita o debug se par�metro for true
	$mail->isSMTP(); //seta o tipo de protocolo
	$mail->SMTPAuth = true; //habilita a autentica��o via smtp
	$mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false ] ];
	$mail->Port = 465; //porta de conex�o
	$mail->SMTPSecure = 'ssl';//tipo de seguran�a
	//or more succinctly:
	$mail->Host = 'ssl://smtp.gmail.com:465';//define o servidor smtp
	//dados de autentica��o no servidor smtp
	$mail->Username = $email; //usu�rio do smtp (email cadastrado no servidor)
	$mail->Password = $password_email; //senha ****CUIDADO PARA N�O EXPOR ESSA INFORMA��O NA INTERNET OU NO F�RUM DE D�VIDAS DO CURSO****

	//dados de envio de e-mail
	$mail->addAddress('gneri94@gmail.com', 'Gabi Teste'); //e-mails que receberão a mesagem
	
	//configura��o da mensagem
	$mail->isHTML(true); //formato da mensagem de e-mail
	$mail->Subject = 'Assunto do e-mail'; //assunto
	$mail->Body    = "Corpo da mensagem <b>.$email. Sua nova senha é:$novaSenha b</b>"; //Se o formato da mensagem for HTML voc� poder� utilizar as tags do HTML no corpo do e-mail
	$mail->AltBody = 'Caso n�o seja suportado o HTML, aqui vai a mensagem em texto'; //texto alternativo caso o html n�o seja suportado
	
	//envio e testes
	if(!$mail->send()) { //Neste momento duas a��es s�o feitas, primeiro o send() (envio da mensagem) que retorna true ou false, se retornar false (n�o enviado) juntamente com o operador de nega��o "!" entra no bloco if.
		echo 'A mensagem n�o pode ser enviada ';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'A mensagem foi enviada com sucesso!';
	}
?>