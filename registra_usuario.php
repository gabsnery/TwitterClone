<?php

    require_once('db.class.php');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "select * from users where user = '$user'";

    if($result_id = mysqli_query($link,$sql)){

        $data_user = mysqli_fetch_array($result_id);

        if ( $data_user['user'] ){
            echo "Usuário já cadastrado!";
            die();
        }
    }else{
        echo "Erro ao localizar o registro do usuário!";
    }
   

    //TESTA SE EXISTE CONTA COM O EMAIL INFORMADO
    $sql = "select * from users where email = '$email'";

    if($result_id = mysqli_query($link,$sql)){

        $data_user = mysqli_fetch_array($result_id);

        if ( $data_user['email'] ){
            echo "Usuário já cadastrado para este e-mail!";
            die();
        }
    }else{
        echo "Erro ao localizar o registro do usuário!";
    }

    $sql = "INSERT INTO users (user, email, password) VALUES ('$user', '$email', '$password')";
    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "erro";
    }
?>