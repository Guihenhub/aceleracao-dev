<?php
    require_once('ex_66/Pessoa.php');

    class Atendente extends Pessoa{
        private int $id;
        private string $funcao;
        private string $horarioEntrada;
        private string $horarioSaida;
        
        public function __construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao,$id,$funcao,$horarioEntrada,$horarioSaida)
        {
            parent::__construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horarioEntrada = $horarioEntrada;
            $this->horarioSaida = $horarioSaida;
        }

        public function getId(){
            return $this->id;
        }

        public function getFuncao(){
            return $this->funcao;
        }

        public function getHorarioEntrada(){
            return $this->horarioEntrada;
        }

        public function getHorarioSaida(){
            return $this->horarioSaida;
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
                'horarioEntrada' => $this->horarioEntrada,
                'horarioSaida' => $this->horarioSaida
            );

            return json_encode($dados);
        }
    }

    $atendente = new Atendente('João','00000000','Rua 0 Quadra 0 Lote 0 Bairro 0','Natan','Naraline',3333,3333,123123,'CEO','13:30','18:00');
    var_dump($atendente);
?> 