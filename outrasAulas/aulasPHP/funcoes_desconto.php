<?php
    function calcula_desconto($valor_total,$desconto){
        $valor_desconto = $valor_total* ($desconto/100);
        $valor_total =$valor_total- $valor_desconto;
        return $valor_total;
    }

?>