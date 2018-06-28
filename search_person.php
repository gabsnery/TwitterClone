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

     $sql = "SELECT* FROM users WHERE user like '%$nome_pessoa%' and id <> $id_user order by user";
    
     $resultado_id = mysqli_query($link,$sql);

     if ($resultado_id){
        while($registro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
            echo '<a href="#" class="list-group-item">';
                echo '<strong>'.$registro['user'].'</strong> <small>'.$registro['email'].'</small>';
                echo '<p class = "list-group-item-text pull-right">';
                    echo '<button type = "button" class = "btn btn-default btn_follow" data-id_user = "'.$registro['id'].'">Seguir</button>';
                echo '</p>';
                echo '<div class = "clearfix"></div>';
            echo '</a>';
           //var_dump($registro); 
        }
     }else{
         echo "Erro na consulta de usuarios no banco de dados.";
     }
?>