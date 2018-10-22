<?php        


<?php        

      session_start();
         if (!isset($_SESSION['user'])){
            header('Location : index.php?erro=2');
         }
    
         require_once('..\db.class.php');
    
         $id_user = $_SESSION['id'];
         $newUser = $_POST['novo_usuario'];

         
         $objDb = new db();
         $link = $objDb->conecta_mysql();
     
         $sql = "SELECT * FROM users WHERE user = '".$newUser."'";

         $result_sql_id = mysqli_query($link,$sql);

         if($result_sql_id){
            while($registro =  mysqli_fetch_array($result_sql_id,MYSQLI_ASSOC)){
                echo "<div class='alert alert-danger'>";
                echo "Usuário já existente!";
                echo "</div>";
                die();
            }
         }else{
            echo "Ocorreu algum erro!</br>Contato o administrador do sistema!";
         }

         $sql = "UPDATE users SET user = '".$newUser."' WHERE id=".$id_user;

         $result_sql_id = mysqli_query($link,$sql);
         
    
         if($result_sql_id){
            echo "<div class='alert alert-success'>";
            echo " Usuário alterado com sucesso";
            echo "</div>";
         }else{
            echo " Erro ao alterar usuario";
         } 

?>
