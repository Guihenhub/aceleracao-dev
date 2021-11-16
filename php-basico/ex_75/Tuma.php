<?php
    require_once('Aluno.php');

    class Turma{
        public function __construct(
            protected int $ano,
            protected string $nome_turma,
            protected array $alunos,
            protected int $capacidade
        ){}

        public function listarAlunos()
        {
            foreach($this->alunos as $aluno){
                var_dump($aluno);
            }
        }

        public function exibeVagas()
        {
            echo "Exibindo vagas";
        }

        public function adicionaAluno(Aluno $aluno)
        {
            array_push($this->alunos,$aluno);
        }
    }
?>