<?php
    require_once('DespesaMes.php');

    class DespesaDia extends DespesaMes{
        private int $dia;

        public function __construct (int $dia, int $mes, float $valor){
            parent::__construct($mes,$valor);
            $this->dia = $dia;
        }

        public function getDia(){
            return $this->dia;
        }
    }
?>