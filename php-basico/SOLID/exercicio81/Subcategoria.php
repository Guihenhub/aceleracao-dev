<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    
    class SubCategoria extends Categoria{
        private Categoria $categoria;

        public function __construct($id, $nome, $descricao, Categoria $categoria){
            parent::__construct($id, $nome, $descricao);
            $this->categoria = $categoria;
        }
    }
?>