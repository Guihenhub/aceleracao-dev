<?php
    class Aluno{
        public function __construct(
            private string $matricula,
            private string $nome,
            private string $sobrenome,
            private string $cpf,
            private string $rg,
            private int $idade,
            private int $nivelEscolar
        ){}

        public function realizaMatricula(){
            echo "Realizando matricula";
        }

        public function realizaRequirimento(){
            echo "Realizando requirimento";
        }

        public function solicitaCertificado(){
            echo "Solicitando certificado";
        }
    }
?>