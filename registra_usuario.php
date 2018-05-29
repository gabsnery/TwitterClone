<?php

    require_once('db.class.php');

    $user = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['senha'];

    $objDb = new bd();
    $link = $objDb->connect_mysql;

    $sql = "insert into users (user,email,password)
     values ('$user','$email','$password')";

    echo $sql;

    if (mysqli_query($link,$sql)){
        echo "Usuario cadastrado com sucesso";
    }else{
        echo "erro";
    }
?>