<?php
    class Exemplar{
        public function __construct(
            private int $codigo,
            private bool $cativa,
            private bool $emprestada,
            private array $emprestimos = null
        ){}

        //Getters e setters
    }
?>