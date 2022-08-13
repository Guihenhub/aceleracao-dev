<?php
     class Resultado{
        public function __construct(
            private string $nomeEspecie,
            private int $quantidade
        ){}
        
        public function getNomeEspecie(): string{
            return $this->nomeEspecie;
        }

        public function getQuantidade(): int{
            return $this->quantidade;
        }
    }
?>