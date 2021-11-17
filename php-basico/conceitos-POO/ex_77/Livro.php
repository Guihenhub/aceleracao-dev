<?php
    class Livro{
        public function __construct(
            private string $titulo,
            private string $autor,
            private string $data,
            private int $edicao,
            private string $editora,
            private string $ISBN,
            private array $exemplares
        ){}
    }
?>