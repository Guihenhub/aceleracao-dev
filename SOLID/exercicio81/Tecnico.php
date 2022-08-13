<?php
    spl_autoload_register(function ($nome) {
        require_once($nome . '.php');
    });
    

    class Tecnico extends Pessoa{
        private string $funcao;
        private int $numTecnico;

        public function __construct($id, $nome, $cpf, $rg , $endereco, $funcao, $numTecnico)
        {   
            parent::__construct($id, $cpf, $cpf, $rg, $endereco);
            $this->funcao = $funcao;
            $this->numTecnico = $numTecnico;
        }
    }
?>