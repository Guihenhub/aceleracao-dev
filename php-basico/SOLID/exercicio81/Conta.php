<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    class Conta{
        public function __construct(
            private int $id,
            private int $agencia,
            private int $digito,
            private string $conta
        ){}
    }
?>