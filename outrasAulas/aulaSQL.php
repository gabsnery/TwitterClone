<?php

    require_once('db.class.php');

    $sql = "SELECT * FROM usuarios WHERE id = 7 ";

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){
        $dados_usuario = array();

        while($linha = mysqli_fetch_array($resultado_id,MYSQLI_ASSOC)){
            $dados_usuario[] = $linha 
        }
    }

?>