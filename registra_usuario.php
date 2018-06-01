<?php

    require_once('db.class.php');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $sql = "INSERT INTO users (user, email, password) VALUES ('$user', '$email', '$password')";
    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "erro";
    }
?>