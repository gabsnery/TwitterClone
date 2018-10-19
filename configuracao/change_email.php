<?php        
        session_start();

        $newUser = $_POST['email_novo'];
    
         if (!isset($_SESSION['user'])){
            header('Location : index.php?erro=2');
         }
    
         require_once('db.class.php');
    
         $id_user = $_SESSION['id'];

         $ObjDB = new db();
         $link = $ObjDB->connecta_mysql();

         $sql = "update users set user = '".$newUser."' where id=".$id_user;

         $result_sql_id = mysqli_query($link,$sql);

         if($result_sql_id){
            echo " Usuário alterado com sucesso";
         }else{
            echo " Erro ao alterar usuario";
         }

?>