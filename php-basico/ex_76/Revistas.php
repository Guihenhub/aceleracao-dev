<?php
    class Revistas{
        public function __construct(
            private $codigo,
            private $titulo,
            private $tipo,
            private $edicoes
        ){}

        public function getEdicao(){
            return $this->edicoes;
        }

        public function setEdicao($edicoes){
            $this->edicoes= $edicoes;
        }
        
    }
?>