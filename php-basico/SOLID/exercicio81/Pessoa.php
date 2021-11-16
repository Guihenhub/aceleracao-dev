<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    
    class Pessoa{
        public function __construct(
            private $id,
            private $nome,
            private $cpf,
            private $rg,
            private $endereco 
        ){}
    }
?>