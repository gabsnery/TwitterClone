<?php
    session_start();

	//echo $_COOKIE["user"];

     if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
     }

     require_once('db.class.php');

     $id_user = $_SESSION['id'];

     $objDb = new db();
     $link = $objDb->conecta_mysql();

     $sql = "SELECT t.data_inclusao,t.tweet,u.user FROM tweet as t INNER JOIN users as u on u.id=t.id_user  ORDER BY data_inclusao DESC";
    
     $resultado_id = mysqli_query($link,$sql);

     if ($resultado_id){
        while($registro = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
            echo '<a href="#" class="list-group-item">';
                echo '<h4  class="list-group-item-heading">'.$registro['user'].' <small>'.$registro['data_inclusao'].'</small></h4>';
                echo '<p class="list-group-item-text">'.$registro['tweet'].'</p>';
            echo '</a>';

        }
     }else{
         echo "Erro na consulta de tweets no banco de dados.";
     }
?>