<?php

    require_once('ex_71/Correntista.php');
    require_once('ex_71/MovimentoConta.php');
    require_once('ex_71/OperacaoBanco.php');

    function atualizaSaldos($correntistas, $movimentosConta, $operacaoBanco){
        foreach($movimentosConta as $movimento){
            $correntista = $operacaoBanco->encontraCorrentista($correntistas, $movimento->getCPFCorretista());
            $novoSaldo = $correntista->getSaldo() + $movimento->getValorMovimento();
            $correntista->setSaldo($novoSaldo);
        }
    };

    $correntista1 = new Correntista('111',350);
    $correntista2 = new Correntista('222',250);
    $correntista3 = new Correntista('333',250);
    $correntistas = array($correntista1, $correntista2, $correntista3);
    

    $movimento1 = new MovimentoContaClass('111',-100);
    $movimento2 = new MovimentoContaClass('111',+500);
    $movimento3 = new MovimentoContaClass('222', -1);
    $movimentos = array($movimento1,$movimento2,$movimento3);

   $operacaoBanco = new OperacaoBancoClass();
    
    atualizaSaldos($correntistas,$movimentos,$operacaoBanco);
    var_dump($correntistas);

?>