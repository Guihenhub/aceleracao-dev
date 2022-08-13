<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });

    class Aluno extends Pessoa{
        private string $matricula;
        private string $curso;

        public function __construct($id, $nome, $cpf, $rg, $endereco, $matricula, $curso)
        {
            parent::__construct($id, $cpf, $cpf, $rg, $endereco);
            $this->matricula = $matricula;
            $this->curso = $curso;
        }
    }
?>