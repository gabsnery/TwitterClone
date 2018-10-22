<?php        
        session_start();

    if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
    }

    require_once('..\db.class.php');

    $id_user = $_SESSION['id'];
    $newEmail = $_POST['novo_email'];

    $teste = $_POST['arg'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "SELECT * FROM users WHERE email = '".$newEmail."'";


    $result_sql = mysqli_query($link,$sql);

    if($result_sql){
        while ($registro = mysqli_fetch_array($result_sql,MYSQLI_ASSOC)) {
            echo "<div class='alert alert-danger'>";
            echo "E-MAIL já cadastrado!";
            echo "</div>";
            die();
        }
    }else{
        echo "Ocorreu algum erro!</br>Contato o administrador do sistema!";
    }
    

    $sql = "SELECT * FROM users WHERE id = '".$id_user."'";

    $result_sql = mysqli_query($link,$sql);

    if($result_sql){
        $linha = mysqli_fetch_assoc($result_sql);
        $old_email = $linha['email'];
    }else{
        echo "Ocorreu algum erro!</br>Contate o administrador do sistema!";
    }
    
    $sql = "UPDATE users SET email= '".$newEmail."' WHERE id = ".$id_user."" ;

    $result_sql = mysqli_query($link,$sql);

    if($result_sql){
        echo "<div class='alert alert-success'>";
        echo " E-mail alterado com sucesso";
        echo "</div>";
        $url = 'http://localhost/TwitterClone-1/envia_aviso.php';

        // what post fields?
        $fields = array(
            'novoemail' => $newEmail,
            'antigoemail' => $old_email,
        );
        
        // build the urlencoded data
        $postvars = http_build_query($fields);
        
        // open connection
        $ch = curl_init();
        
        // set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
        
        // execute post
        $result = curl_exec($ch);

        // close connection
        curl_close($ch);
     }else{
        echo " Erro ao alterar usuario";
     }

     
?>