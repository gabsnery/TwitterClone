<?php

    require_once(db.class.php);

    $_POST['usuario'];
    echo $_POST['usuario'];
    $_POST['email'];
    echo $_POST['email'];
    $_POST['senha'];
    echo $_POST['senha'];

    $objDb = new db();
    $link = $objDb->conecta_mysql;

 


?>