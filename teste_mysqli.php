<?php
    require_once('db.class.php');


    $objDB = new db();
    $link = $objDB->conecta_mysql();

    $sql = "select user,email from users";

    $result_sql_id = mysqli_query($link,$sql);

    if ($result_sql_id){

        $data_user = array();

        while($linha = mysqli_fetch_array($result_sql_id,MYSQLI_ASSOC)){
            $data_user[] = $linha; 
        }
        foreach ($data_user as $user) {
            echo "<br/>";
            echo $user['email'];
            echo "<br/>";
            echo "<br/>";
        }
    }else{
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site!";
    }
?>