<?php
    require_once('ex_66/Pessoa.php');

    class Secretaria extends Pessoa{
        private int $id;
        private string $funcao;
        private string $horatrabalhada;
        private string $horasExtras;
        
        public function __construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao,$id,$funcao,$horatrabalhada,$horasExtras)
        {
            parent::__construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horatrabalhada = $horatrabalhada;
            $this->horasExtras = $horasExtras;
        }

        public function getId(){
            return $this->id;
        }

        public function getFuncao(){
            return $this->funcao;
        }

        public function getHoraTrabalhada(){
            return $this->horatrabalhada;
        }

        public function getHorasExtras(){
            return $this->horasExtras;
        }

        public function toString(){
            $dados = array(
                'nome' => $this->nome,
                'cpf' => $this->cpf,
                'endereco' => $this->endereco,
                'nomePai' => $this->nomePai,
                'nomeMae' => $this->nomeMae,
                'rg' => $this->rg,
                'serialIdentificacao' => $this->serialIdentificacao,
                'id' => $this->id,
                'funcao' => $this->funcao,
                'horatrabalhada' => $this->horatrabalhada,
                'horasExtras' => $this->horasExtras
            );

            return json_encode($dados);
        }
    }

    $secretaria = new Secretaria('Maria','00000000','Rua 0 Quadra 0 Lote 0 Bairro 0','Natan','Naraline',3333,3333,123123,'CEO','8h','8h30min');

    var_dump($secretaria);
?>