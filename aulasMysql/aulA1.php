<?php

//SQL - LINGUAGEM DE CONSULTA ESTRUTURADA
//DDL   Data Definition Language            CREATE, ALTER e DROP
//DML   Data Manipulation Language          INSERT, DELETE e UPDATE
//DCL   Data Control Language               ACESSOS 
//DTL   Data Transaction Language           TRANSAÇÕES
//DQL   Data Query Language                 SELECT  

require_once('..\db.class.php');

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "drop table teste;";

$resultado_ID = mysqli_query($link,$sql);



var_dump($resultado_ID);

?>