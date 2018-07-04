<?php
class db{
        //host
        //usuario
        //senha
        //banco
        PRIVATE $user = '';
        PRIVATE $password= '';
        PRIVATE $database= '';
        PRIVATE $host= '';
        public function conecta_mysql(){
            
            if (file_exists("../configTwitter.ini")) {
                $db = parse_ini_file("../configTwitter.ini");
            } else {
                throw new Exception("arquivo $name nao encontrado");
            }
    
            $user = isset($db['user']) ? $db['user'] : NULL;
            $password = isset($db['pass']) ? $db['pass'] : NULL ; 
            $database = isset($db['database']) ? $db['database'] : NULL;
            $database = $db['database'];
            $host = isset($db['host']) ? $db['host'] : NULL;
            define("DB_SERVER", $host);
            define("DB_USER", $user);
            define("DB_PASSWORD", $password);
            define("DB_DATABASE", $database);

            $con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
            //criar conexao
            //$con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
            //ajustar o charset de comunicação entre a aplicação e o banco de dados
            mysqli_set_charset($con, 'utf8');
            //verificar se houve erro de conexão
            if(mysqli_connect_errno()){
                echo 'Erro ao tentar se conectar com BD MySQL: ' . mysqli_connect_error();
            }
            return $con;
        }
    }
?>