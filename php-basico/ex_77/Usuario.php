<?php
    class Usuario{
        public function __construct(
            private string $nome,
            private int $cpf,
            private string $telefone,
            private string $matricula,
            private array $emprestimos = null
        ){}

        //Getters e setters
    }
?>