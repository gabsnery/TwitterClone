<?php
    session_start();

    if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
    }


    require_once('db.class.php');

    $user_id = $_SESSION['id'] ;
    $seguir_id_usuario = $_POST['seguir_id_usuario'];
    
    if ($seguir_id_usuario == '' || $user_id == ''){
        die();        
    }

    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $sql = "INSERT INTO user_followers (id_user, id_user_followed) VALUES ($user_id, $seguir_id_usuario)";
    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Tweet incluido com sucesso!";
    }else{
        echo "erro";
    }
    
?>