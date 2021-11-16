<?php
    class Pessoa implements JsonSerializable{
        protected string $nome;
        protected string $cpf;
        protected string $endereco;
        protected string $nomePai;
        protected string $nomeMae;
        protected int $rg;
        protected int $serialIdentificacao;

        public function __construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao)
        {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
            $this->nomePai = $nomePai;
            $this->nomeMae = $nomeMae;
            $this->rg = $rg;
            $this->serialIdentificacao = $serialIdentificacao;
        }

        public function __toString(){
            $jsonString = json_encode($this);
            echo $jsonString;
            return $jsonString;
        }

        public function jsonSerialize()
        {   $array = array(
                'nome'=> $this->nome,
                'cpf'=> $this->cpf,
                'endereco'=> $this->endereco,
                'nomePai'=> $this->nomePai,
                'nomeMae'=> $this->nomeMae,
                'rg'=> $this->nomeMae,
                'serialIdentificacao'=> $this->serialIdentificacao
            );

            return $array;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getRg(){
            return $this->rg;
        }
    }

?>