<?php
    require_once('Correntista.php');

    Interface OperacaoBanco{
        public function encontraCorrentista($todosCorrentistas, $cpfProcurado):Correntista;
    }

    class OperacaoBancoClass implements OperacaoBanco{
        public function encontraCorrentista($todosCorrentistas, $cpfProcurado):Correntista{
            $resultado = NULL;
            
            foreach($todosCorrentistas as $correntista){
                if($correntista->getCPFCliente() == $cpfProcurado){
                    $resultado = $correntista;
                }
            }

            return $resultado;
        }
    }
?>