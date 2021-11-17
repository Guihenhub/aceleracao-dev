<?php
     class ItemOrcamentoComplexo extends ItemOrcamento{
        private array $subItens;
        public function __construct($historico, $valor, $subItems)
        {
            parent::__construct($historico, $valor);
            $this->subItens = $subItems;
        }

        public function getValor():float{
            $soma = 0;
            foreach($this->subItens as $itens){
                $soma += $itens->getValor();
            }   

            return $soma;
        }

        public function encontraItem(string $historicoItem)
        {
            $itemEncontrado = NULL;

            foreach($this->subItens as $itens){
                if($itens->getHistorico() == $historicoItem){
                    $itemEncontrado = $itens;
                }
            }   

            return $itemEncontrado;
        }
    }
?>