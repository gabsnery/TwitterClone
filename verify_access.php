<?php
    session_start();
    require_once('db.class.php');

    //o post pega a partir do atributo NAME
    $password = $_POST['password'];
    $user = $_POST['user'];

    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "select user,email,id from users where user = '$user' and password = '$password'";

    //RETORNOS DO MYSQLI
    //UPDATE TRUE/FALSE
    //DELETE TRUE/FALSE
    //INSERT TRUE/FALSE
    //SELECT FALSE CASO EXISTA PROBLEMA, E UMA REFERENCIA CASO A QUERY SEJA VALIDA
    $result_sql_id = mysqli_query($link,$sql);

    if ($result_sql_id){

        $data_user = mysqli_fetch_array($result_sql_id);

        if (isset($data_user['user'])){
            $_SESSION['user'] = $data_user['user'];
            $_SESSION['id'] = $data_user['id'];
            $_SESSION['email'] = $data_user['email'];
            
            header('Location :home.php');
        }else{
            //Re-direciona para a pagina index
            header('Location: index.php?erro=1');
        }

    }else{
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site!";
    }
?>