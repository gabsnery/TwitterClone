<?php
    function valida_login($login,$senha){
        //o certo é validar no bd

        $login_bd = "Gabi";
        $senha_bd = "123";
        
        if (($login_bd == $login) && ($senha == $senha_bd)){
            return true;
        }

        return false;
    }
?>