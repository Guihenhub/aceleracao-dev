<?php
    class ItemOrcamento{
        public function __construct(
            private string $historico,
            private float $valor
        ){}

        public function getHistorico():string{
            return $this->historico;
        }

        public function getValor():float{
            return $this->valor;
        }
    }
?>