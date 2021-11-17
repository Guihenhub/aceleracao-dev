<?php
    require_once('Correntista.php');

    Interface MovimentoConta{
        public function getCPFCorretista():string;
        public function getValorMovimento():float;
    }

    class MovimentoContaClass implements MovimentoConta{
        private string $cpf;
        private float $valorMovimento;

        public function __construct($cpf, $valorMovimento)
        {
            $this->cpf = $cpf;
            $this->valorMovimento = $valorMovimento;
        }

        public  function getCPFCorretista():string{
            return $this->cpf;
        }

        public function getValorMovimento():float{
            return $this->valorMovimento;
        }
        
    }
?>