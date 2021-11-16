<?php
    class DespesaMes{
        private int $mes;
        private float $valor;

        public function __construct($mes, $valor)
        {
            $this->mes = $mes;
            $this->valor = $valor;
        }

        public function getMes(){
            return $this->mes;
        }

        public function getValor(){
            return $this->valor;
        }
    }
?>