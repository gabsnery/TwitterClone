<?php

    class Felino// extends AnotherClass implements Interface
    {
        var $mamifero = 'sim';

        function correr(){
            echo 'Correr como felino';
        }
        
    }
    class Chita extends Felino// implements Interface
    {

        //Polimorfismo - Seria sobrescrever um metodo da classe pai
        function correr(){
            echo 'Correr como Chita 100KM/H';
        }

    }

    $chita = new Chita();

    echo $chita->mamifero . '<br>';
    $chita->correr();

    /*class Gato extends Felino// implements Interface
    {
        
    }*/
    
?>