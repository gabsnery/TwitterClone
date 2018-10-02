<?php
    session_start();

    if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
    }


    require_once('db.class.php');

    $user_id = $_SESSION['id'] ;
    $texto_tweet = $_POST['texto_tweet'];
    
    if ($texto_tweet == '' || $user_id == ''){
        die();        
    }

    $objDb = new db();
    $link = $objDb->conecta_mysql();


    $sql = "INSERT INTO tweet (id_user, tweet) VALUES ('$user_id', '$texto_tweet')";
    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Tweet incluido com sucesso!";
    }else{
        echo "erro";
    }
?>