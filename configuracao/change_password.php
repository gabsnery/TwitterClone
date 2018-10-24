<?php

    
    session_start();
    if (!isset($_SESSION['user'])) {
    header('Location : index.php?erro=2');
    }

    require_once('..\db.class.php');

    $id_user = $_SESSION['id'];
    
    $senhaAntiga = $_POST['senhaAntiga'];
    $senhaNova = $_POST['senhaNova'];
    $senhaNovaConfirma = $_POST['senhaNovaConfirma'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //TESTAR SE A SENHA ATUAL ESTÁ CORRETA
    //TESTAR SE AS DUAS SENHAS ESTÃO IGUAIS
    //TESTAR SE AS 3 SENHAS ESTÃO IGUAIS E TERMINAR
    //ALTERAR A SENHA
    //DISPARAR E-MAIL