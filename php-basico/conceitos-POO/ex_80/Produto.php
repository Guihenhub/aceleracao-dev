<?php
    abstract class Produto{
        protected $codigo;
        protected $preco;

        public function __construct($codigo, $preco)
        {   
            $this->codigo = $codigo;
            $this->preco = $preco;
        }

        public function getPreco()
        {
            return $this->preco;
        }
    }
?>