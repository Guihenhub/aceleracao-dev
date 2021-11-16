<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    class Grupos{
        public function __construct(
            private int $id,
            private string $nome,
            private string $descricao
        ){}

    }
?>