<?php
    require_once('ex_66/Pessoa.php');

     class Empregado extends Pessoa{
        private int $id;
        private string $funcao;
        private string $horarioEntrada;
        private string $horarioSaida;
        private float $salario;
        private string $horasExtras;
        
        public function __construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao,$id,$funcao,$horarioEntrada,$horarioSaida,$salario,$horasExtras)
        {
            parent::__construct($nome,$cpf,$endereco,$nomePai,$nomeMae,$rg,$serialIdentificacao);
            $this->id = $id;
            $this->funcao = $funcao;
            $this->horarioEntrada = $horarioEntrada;
            $this->horarioSaida = $horarioSaida;
            $this->salario = $salario;
            $this->horasExtras = $horasExtras;
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
                'horarioSaida' => $this->horarioSaida,
                'Salario' => $this->salario,
                'horasExtras' => $this->horasExtras
            );

            return json_encode($dados);
        }
    }

    $empregado1 = new Empregado('João','00000000','Rua 0 Quadra 0 Lote 0 Bairro 0','Natan','Naraline',3333,3333,123123,'CEO','13:30','18:00',3000,50);
    $empregado2 = new Empregado('Ana','00000000','Rua 0 Quadra 0 Lote 0 Bairro 0','Caito','Maria',3333,3333,123123,'CEO','13:30','18:00',6000,30);
    $empregado3 = new Empregado('Pedro','00000000','Rua 0 Quadra 0 Lote 0 Bairro 0','Cristiana','Camila',3333,3333,123123,'CEO','13:30','18:00',9000,10);


    var_dump($empregado1);
    echo '<br><br>';
    var_dump($empregado2);
    echo '<br><br>';
    var_dump($empregado3);
?>