<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });

    class Atendimento{
        public function __construct(
            private string $protocolo,
            private Grupos $grupo,
            private Atendente $atendente,
            private Tecnico $tecnico,
            private Aluno $aluno,
            private TipoServico $tipo,
            private int $idCategoria,
            private int $idSubcategoria,
            private int $idItem
        ){}

        public function alteraStatusAtendimento()
        {
            echo "Alterando o estado";
        }

        public function finalizaAntendimento()
        {
            echo "Finalizando o atendimento";
        }

        public function repassaAntendimento(){
            echo "Repassando atendimento";
        }


    }
?>