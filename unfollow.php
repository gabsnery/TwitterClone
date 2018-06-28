<?php
    session_start();

    if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
    }


    require_once('db.class.php');

    $user_id = $_SESSION['id'] ;
    $deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];
    
    if ($deixar_seguir_id_usuario == '' || $user_id == ''){
        die();        
    }

    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $sql = "delete from user_followers where id_user = $user_id and id_user_followed = $deixar_seguir_id_usuario";
    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Tweet excuido com sucesso!";
    }else{
        echo "erro";
    }
?>