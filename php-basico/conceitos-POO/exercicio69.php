<?php
    
    require_once('ex_69/ItemOrcamento.php');
    require_once('ex_69/ItemOrcamentoComplexo.php');

    $item1 = new ItemOrcamento('Item 1',30);
    $item2 = new ItemOrcamento('Item 2',34);
    $item3 = new ItemOrcamento('Item 2',40);
    
    $arraySubtItens = array($item1,$item2,$item3);

    $itemComplexo = new ItemOrcamentoComplexo('Item complexo', 50, $arraySubtItens);

    array_push($arraySubtItens,$itemComplexo);
    $itemComplexo2 = new ItemOrcamentoComplexo('Item complexo 2', 50, $arraySubtItens);

    echo($itemComplexo2->getValor());
?>