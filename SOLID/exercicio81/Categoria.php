<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });

    class Categoria{
        public function __construct(
            private int $id,
            private string $nome,
            private string $descricao
        ){}

        public function verificaPrioridade():bool{
            echo 'Verificando prioridade';
            return true;
        }

        public function aumentaNivel():bool
        {
            echo 'Aumentando o nível';
            return true;
        }
    }
?>