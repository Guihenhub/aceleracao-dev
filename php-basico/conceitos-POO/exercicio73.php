<?php
    require_once('ex_73/DespesaIndividuo.php');

    $despesaDia1 = new DespesaDia(3,3,30);
    $despesaDia2 = new DespesaDia(4,3,10);
    $despesaMes3 = new DespesaMes(3,50);
    $despesaMes4 = new DespesaMes(4,10);

    $despesas = array($despesaDia1,$despesaDia2,$despesaMes3,$despesaMes4);

    $despesaPessoa = new DespesaIndividuo('000',$despesas);
    $mes3 = $despesaPessoa->totalizaMes(3);
    $mes4 = $despesaPessoa->totalizaMes(4);

    var_dump($mes3);
    echo "<br>";
    var_dump($mes4);
?>