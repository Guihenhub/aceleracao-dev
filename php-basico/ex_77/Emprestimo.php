<?php
    class Emprestimo{
        public function __construct(
            private string $dataEmprestimo,
            private string $dataPrevistaDeDevolucao,
            private string $dataDeEntregaReal,
            private int $situacao
        ){}

        //Getters e setters
    }
?>