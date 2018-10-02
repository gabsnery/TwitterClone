<?php
//empty
// true -> '' , 0 , '0' , false , null , array()
//false -> *

$valor = 'Gabi';
if (empty($valor)){
    echo "Variavel vazia";
}
//----------------------------------------------------
//is_numeric()
//true -> 0-9
//false -> vazio ou a-z

$valor = 0 ; // verdadeiro
$valor = '123'; //verdadeiro
$valor = '1A23'; //falso
if (is_numeric($valor)){
    echo "<br>numero";
}
//-------------------------------
//ucfirst()
//Coloca a primeira letra da string em capslock
echo ucfirst("oi"); //Oi
echo '<br>';
//---------------------------
//Array
$frutas = array(0=>'Gabi',1=>'Douglas',2=>'Simone');

$itens_array = count($frutas);

echo $itens_array;

echo '<br>';

$array1 = array('mac','linux');
$array2 = array('windows');

//
?>