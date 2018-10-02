<?php

    class Pessoa //extends AnotherClass implements Interface
    {
        //ATRIBUTOS
        var $nome;
        //METODOS
        function setNome($nome){
            $this->nome = $nome;
        }
        
        
        function getNome(){
            return $this->nome;
        }
    }

    $pessoa = new Pessoa();

    $pessoa->setNome('Gabi');

    echo $pessoa->getNome();
    
?>