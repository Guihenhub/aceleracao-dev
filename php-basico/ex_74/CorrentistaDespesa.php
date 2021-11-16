<?php
    require_once('ex_71/Correntista.php');
    require_once('ex_73/DespesaIndividuo.php');

    class correntistaDespesa extends Correntista{
        private DespesaIndividuo $despesasPrevistas;

        public function __construct(string $cpfCliente, float $saldo, DespesaIndividuo $despesas)
        {
            parent::__construct($cpfCliente,$saldo);
            $this->despesasPrevistas = $despesas;
        }

        public function getDespesasPrevistas():DespesaIndividuo{
            return $this->despesasPrevistas;
        }
    }
?>