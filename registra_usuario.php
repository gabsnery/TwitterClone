<?php

    require_once('db.class.php');

    $user = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $objDb = new bd();
    $link = $objDb->connect_mysql();
    echo $link;
    $sql = "insert into users (user,email,password)
     values ('$user','$email','$password')";

    $sql = "INSERT INTO users (user, email, password) VALUES ('$user', '$email', '$password')";

    echo $sql;
    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "erro";
    }
?>