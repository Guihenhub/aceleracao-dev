<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    
    class TipoServico{
        public function __construct(
            private int $id,
            private string $nome,
            private string $descricao,
            private int $nivel
        ){}

        public function verificaPrioridade():bool{
            echo 'Verificando prioridade';
            return true;
        }

        public function aumentaNivel():bool
        {
            $this->nivel++; 
            return true;
        }
    }
?>