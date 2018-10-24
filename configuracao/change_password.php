<?php

    
    session_start();
    if (!isset($_SESSION['user'])) {
    header('Location : index.php?erro=2');
    }

    require_once('..\db.class.php');

    $id_user = $_SESSION['id'];
    
    $senhaAntiga = $_POST['senhaAntiga'];
    $senhaNova = $_POST['senhaNova'];
    $senhaNovaConfirma = $_POST['senhaNovaConfirma'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    //TESTAR SE A SENHA ATUAL ESTÁ CORRETA
    $sql = "SELECT * FROM users WHERE id = ".$id_user." AND password = '".md5($senhaAntiga)."'";

    $result_id = mysqli_query($link,$sql);

    if ($result_id) {
        $linha = mysqli_fetch_assoc($result_id);
        if ($linha == NULL) { //COMANDO RODOU MAS NÃO ENCONTROU REGISTROS
        }
        $email = $linha['email'];
    } else {
        echo "deu ruim";
    }
    //TESTAR SE AS DUAS SENHAS ESTÃO IGUAIS
    if ($senhaNova != $senhaNovaConfirma){
        echo "as senhas não conferem";
    } 
    //TESTAR SE AS 3 SENHAS ESTÃO IGUAIS E TERMINAR
    if ($senhaNova == $senhaAntiga){
        echo "Senha nova igual a senha antiga";
    } 
    //ALTERAR A SENHA
    $sql = "UPDATE users SET password = '".md5($senhaAntiga)."' WHERE id = ".$id_user;

    $result_id = mysqli_query($link, $sql);

    if ($result_id) {
        echo "<div class='alert alert-success'>";
        echo " Senha alterada com sucesso";
        echo "</div>";
        $fields = array(
            'tipo' => "senha",
            'novoemail' => $email,
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
        
    } else {

    }
    //DISPARAR E-MAIL