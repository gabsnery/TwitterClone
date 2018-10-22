<?php
    session_start();

    if (!isset($_SESSION['user'])){
        header('Location : index.php?erro=2');
     }

     require_once('..\db.class.php');

     $id_user = $_SESSION['id'];
     $newEmail = $_POST['novo_email'];
     $teste = $_POST['teste'];
     echo $teste;



?>