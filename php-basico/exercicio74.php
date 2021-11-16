<?php
    require_once('ex_74/CorrentistaDespesa.php');

    function verificarCorrentistasPositivos($correntistasDespesas){
        $correntistasPositivos = array();

        foreach($correntistasDespesas as $correntistaDespesa){
            $despesaMarco =$correntistaDespesa->getDespesasPrevistas()->totalizaMes(3);
            $valorDespesaMarco = $despesaMarco->getValor();
            
            if($valorDespesaMarco < $correntistaDespesa->getSaldo()){
                array_push($correntistasPositivos,$correntistaDespesa);
            }
        }

        return $correntistasPositivos;
    }

    $despesaDia1 = new DespesaDia(3,3,30);
    $despesaDia2 = new DespesaDia(4,3,10);
    $despesaMes3 = new DespesaMes(3,50);
    $despesaMes4 = new DespesaMes(3,10);

    $despesas1 = array($despesaDia1);
    $despesas2 = array($despesaDia1, $despesaDia2);
    $despesas3 = array($despesaDia1, $despesaMes3, $despesaMes4);
    $despesas4 = array($despesaDia1,$despesaDia2,$despesaMes3,$despesaMes4);

    $despesaPessoa1 = new DespesaIndividuo('000',$despesas1);
    $despesaPessoa2 = new DespesaIndividuo('001',$despesas2);
    $despesaPessoa3 = new DespesaIndividuo('002',$despesas3);
    $despesaPessoa4 = new DespesaIndividuo('003',$despesas4);

    $correntistaDespesa1 = new correntistaDespesa('000',10,$despesaPessoa1);
    $correntistaDespesa2 = new correntistaDespesa('001',35,$despesaPessoa2);
    $correntistaDespesa3 = new correntistaDespesa('002',150,$despesaPessoa3);
    $correntistaDespesa4 = new correntistaDespesa('003',200,$despesaPessoa4);
    
    $correntistasDespesas = array($correntistaDespesa1, $correntistaDespesa2, $correntistaDespesa3, $correntistaDespesa4);

    $correntistasPositivos = verificarCorrentistasPositivos($correntistasDespesas);
    var_dump($correntistasPositivos);

?>