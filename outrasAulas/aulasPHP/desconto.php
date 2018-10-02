<?php 
    require_once("funcoes_desconto.php");

    $valor_total = 800;
    $desconto = 10;
    
    $valor_com_desconto = calcula_desconto($valor_total,$desconto);
?>
Valor Total: R$<?=$valor_total?> <br>
Valor Desconto: <?=$desconto?>% <br>
Valor Total com desconto: R$<?=$valor_com_desconto?>
