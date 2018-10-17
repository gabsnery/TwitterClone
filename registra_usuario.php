<?php

    require_once('db.class.php');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();
 //TESTA SE EXISTE CONTA COM O usuario INFORMADO
    $sql = "select * from users where user = '$user'";

    if($result_id = mysqli_query($link,$sql)){

        $data_user = mysqli_fetch_array($result_id);
        if ( $data_user['user'] ){
            echo "Usuário já cadastrado!";
            $usuario_existe = 1;
        }
    }else{
        echo "Erro ao localizar o registro do usuário!";
    }

    //TESTA SE EXISTE CONTA COM O EMAIL INFORMADO
    $sql = "select * from users where email = '$email'"; //FAZ A CONSULTA

    if($result_id = mysqli_query($link,$sql)){  
        $data_user = mysqli_fetch_array($result_id);
        if ( $data_user['email'] ){
            echo "Usuário já cadastrado para este e-mail!";
            $email_existe = 1;
        }
    }else{
        echo "Erro ao localizar o registro do usuário!";
    }

    if((isset($email_existe) == 1) || (isset($usuario_existe) == 1)){

        $retorno_get = '';
        if($email_existe){
            $retorno_get.= "erro_email=".$email_existe."&";
        }
        if($usuario_existe){
            $retorno_get.= "erro_usuario=".$usuario_existe;
        }
    
       header('Location: inscrevase.php?'.$retorno_get);
       die();
    }
    

    
    $sql = "INSERT INTO users (user, email, password) VALUES ('$user', '$email', '$password')";
    //executar a query
    if(mysqli_query($link, $sql)){
        header('Location: home.php?');
    }else{
        echo "erro";
    }
?>