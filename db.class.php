<?php
    class bd{
        //host
        //usuario
        //senha
        //banco
        private $host = 'localhost';
        private $user = 'root';
        private $password = 'novaSenha1';
        private $database = 'twitter_clone';

        public function connect_mysql(){
            //mysqli_connect(localizaão do banco,usuario,senha,banco);
            //cria a conexão
            $connection = mysqli_connect($this->$host,$this->$user,$this->password,$this->$database);

            //ajusta o charset de comunicação entre a aplicação e o banco
            mysqli_set_charset($connection,'utf8');

            //verifica erro de conexao
            if(mysqli_connect_errno()){
                echo mysqli_connect_error();
                die(mysqli_connect_error());
            }
            //retorna a conexão
            return $connection;
        }
    }
?>