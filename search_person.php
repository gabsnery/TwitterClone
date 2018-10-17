<?php
    session_start();

	//echo $_COOKIE["user"];

     if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
     }

     require_once('db.class.php');

     $id_user = $_SESSION['id'];
     $nome_pessoa = $_POST['nome_tweet'];
     $objDb = new db();
     $link = $objDb->conecta_mysql();

     $sql = "SELECT* FROM users WHERE user like '%$nome_pessoa%' and id <> $id_user order by user"; //FAZ A CONSULTA DOS USUARIOS
    
     $resultado_id = mysqli_query($link,$sql); //EXECUTA A CONSULTA E GUARDA O RETORNO NA VARIAVEL "$resultado_id"

     if ($resultado_id){ //SE NÃO HOUVE ERRO
        while($registro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){ // PARA CADA REGISTRO DA ARRAY RETORNADA POR NUMERO
            echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registro['user'].'</strong> <small>'.$registro['email'].'</small>';
                echo '<p class = "list-group-item-text pull-right">';

                    $sql = "SELECT * FROM user_followers WHERE id_user = $id_user and  id_user_followed = ".$registro['id']." ";

                   $resultado_id2 = mysqli_query($link,$sql);
                    if ($resultado_id2){
                        $data_user = mysqli_fetch_array($resultado_id2);
                       if ( $data_user['id_follower'] ){
                            echo '<button type = "button" class = "btn btn-primary btn_deixar_follow" id="btn_deixar_follow_'.$registro['id'].'" data-id_user = "'.$registro['id'].'">Unfollow</button>';
                            echo '<button type = "button" style = "display:none" class = "btn btn-default btn_follow" id = "btn_follow_'.$registro['id'].'" data-id_user = "'.$registro['id'].'">Follow</button>';
                        }else{
                            echo '<button type = "button" class = "btn btn-default btn_follow" id = "btn_follow_'.$registro['id'].'" data-id_user = "'.$registro['id'].'">Follow</button>';
                            echo '<button type = "button" style = "display:none" class = "btn btn-primary btn_deixar_follow" id="btn_deixar_follow_'.$registro['id'].'" data-id_user = "'.$registro['id'].'">Unfollow</button>';
                        }
                   }else{
                       echo $sql;
                   }

                echo '</p>';
                echo '<div class = "clearfix"></div>';
            echo '</a>';
           //var_dump($registro); 
        }
     }else{
         echo "Erro na consulta de usuarios no banco de dados.";
     }
?>