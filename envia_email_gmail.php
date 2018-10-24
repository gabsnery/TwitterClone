<?php

	/* script configurado para funcionar com o servi�o de smtp do gmail */
	/* cuidado para n�o expor seus dados de usu�rio e senha de email */
	/* o gmail implementa uma seguran�a para permitir ou n�o o acesso ao seu e-mail atrav�s de aplicativos menos seguros (como � caso), ao efetuar o teste de envio de e-mail consulte sua caixa de mensagem, caso esta configura��o esteja desabilitada voc� receber� um e-mail do google questionando se deve ou n�o habilitar tal acesso */
	
	require 'PHPMailer\PHPMailerAutoload.php';
	if (file_exists("../configTwitter.ini")) {
		$db = parse_ini_file("../configTwitter.ini");
	} else {
		if (file_exists("../../configTwitter.ini")) {
			$db = parse_ini_file("../../configTwitter.ini");
		} else {
			throw new Exception("arquivo $name nao encontrado");
		}
	}

	$password_email = isset($db['pass_email ']) ? $db['pass_email '] : NULL;
	$email = isset($db['email ']) ? $db['email '] : NULL ; 
	//configura��es b�sicas de endere�o e protoloco 
	$mail = new PHPMailer; //faz a inst�ncia do objeto PHPMailer
	//$mail->SMTPDebug = true; //habilita o debug se par�metro for true
	$mail->isSMTP(); //seta o tipo de protocolo
	$mail->Host = 'smtp.gmail.com'; //define o servidor smtp
	$mail->SMTPAuth = true; //habilita a autentica��o via smtp
	$mail->SMTPOptions = [ 'ssl' => [ 'verify_peer' => false ] ];
	$mail->SMTPSecure = 'tls'; //tipo de seguran�a
	$mail->Port = 587; //porta de conex�o
	
	
	//dados de autentica��o no servidor smtp
	$mail->Username = $password_email; //usu�rio do smtp (email cadastrado no servidor)
	$mail->Password = $email; //senha ****CUIDADO PARA N�O EXPOR ESSA INFORMA��O NA INTERNET OU NO F�RUM DE D�VIDAS DO CURSO****
	
	//dados de envio de e-mail
	$mail->addAddress('gneri94@gmail.com', 'Gabi Teste'); //e-mails que receberam a mesagem
	
	//configura��o da mensagem
	$mail->isHTML(true); //formato da mensagem de e-mail
	$mail->Subject = 'Assunto do e-mail'; //assunto
	$mail->Body    = 'Corpo da mensagem <b>HTML</b>'; //Se o formato da mensagem for HTML voc� poder� utilizar as tags do HTML no corpo do e-mail
	$mail->AltBody = 'Caso n�o seja suportado o HTML, aqui vai a mensagem em texto'; //texto alternativo caso o html n�o seja suportado
	
	//envio e testes
	if(!$mail->send()) { //Neste momento duas a��es s�o feitas, primeiro o send() (envio da mensagem) que retorna true ou false, se retornar false (n�o enviado) juntamente com o operador de nega��o "!" entra no bloco if.
		echo 'A mensagem n�o pode ser enviada ';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'A mensagem foi enviada com sucesso!';
	}
?>