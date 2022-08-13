<?php
    class Pessoa{
        private $token;

        public function __construct(
            private $nome,
            private $email,
            private $profissao,
            private $escolaridade
        ){}

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getProfissao(){
            return $this->profissao;
        }

        public function getEscolaridade(){
            return $this->escolaridade;
        }

        public function setToken($token){
            $this->token = $token;
        }
    }
?>