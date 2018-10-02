<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    class Veiculo{
        /*
        public
        private
        protected
        */
        private $placa;
        private $cor;
        private $tipo;

        function __construct($cor){

            $this->cor = $cor;

        }
        function __destruct(){

            echo 'Destruido!!';

        }
        /**
         * Get the value of placa
         */ 
        public function getPlaca()
        {
                return $this->placa;
        }

        /**
         * Set the value of placa
         *
         * @return  self
         */ 
        public function setPlaca($placa)
        {
                $this->placa = $placa;

                return $this;
        }

        /**
         * Get the value of cor
         */ 
        public function getCor()
        {
                return $this->cor;
        }

        /**
         * Set the value of cor
         *
         * @return  self
         */ 
        public function setCor($cor)
        {
                $this->cor = $cor;

                return $this;
        }

        /**
         * Get the value of tipo
         */ 
        public function getTipo()
        {
                return $this->tipo;
        }

        /**
         * Set the value of tipo
         *
         * @return  self
         */ 
        public function setTipo($tipo)
        {
                $this->tipo = $tipo;

                return $this;
        }
    }

    $veiculo = new Veiculo('Amarelo');

    $veiculo->setPlaca('ABC-1234');
    echo $veiculo->getCor() . '<br>';
    

?>