<?php
    class Correntista{
        private String $cpfCliente;
        private float $saldo;

        public function __construct($cpfCliente, $saldo)
        {
            $this->cpfCliente = $cpfCliente;
            $this->saldo = $saldo;
        }

        public function getCPFCliente(){
            return $this->cpfCliente;
        }

        public function getSaldo(){
            return $this->saldo;
        }

        public function setSaldo($saldo){
            $this->saldo = $saldo;
        }
    }
?>