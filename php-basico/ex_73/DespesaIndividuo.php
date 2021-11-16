<?php
    require_once('DespesaDia.php');
    require_once('DespesaMes.php');

    class DespesaIndividuo{
        private string $cpf;
        private array $despesas;

        public function __construct(string $cpf, array $despesas)
        {
            $this->cpf = $cpf;
            $this->despesas = $despesas;
        }

        public function getCPF(){
            return $this->cpf;
        }

        public function totalizaMes(int $mes){
            $soma = 0;

            foreach($this->despesas as $despesa){
                $mesDespesa = $despesa->getMes();
               
                if($mesDespesa == $mes){
                    $soma += $despesa->getValor();
                }
            }

            $despesaMes = new DespesaMes($mes, $soma);

            return $despesaMes;
        }
    }
?>