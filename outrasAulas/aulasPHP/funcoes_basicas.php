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
echo "oi";
$valor = 0 ; // verdadeiro
$valor = '123' //verdadeiro
$valor = '1A23' //falso
if (is_numeric($valor)){
    echo "<br>numero";
}

?>