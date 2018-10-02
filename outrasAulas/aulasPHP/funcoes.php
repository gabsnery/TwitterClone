<?php

    function exibir_boas_vindas($nome = 'indefinido'){
        echo "Bem vindo ao curso de PHP, " .$nome;

    }

    function calcular_soma($par1,$par2){
        return $par1+$par2;
    }

    echo calcular_soma(4,7);
    echo "</br>";
    exibir_boas_vindas();
?>