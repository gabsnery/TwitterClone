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

     $sql = "SELECT* FROM users WHERE user = '$nome_pessoa' and id <> $id_user ";
    
     $resultado_id = mysqli_query($link,$sql);

     if ($resultado_id){
        while($registro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
            echo '<a href="#" class="list-group-item">';
               echo '<strong>'.$registro['user'].'</strong> <small>'.$registro['email'];
           //     echo '<p class="list-group-item-text">'.$registro['tweet'].'</p>';
            echo '</a>';
           //var_dump($registro); 
        }
     }else{
         echo "Erro na consulta de usuarios no banco de dados.";
     }
?>