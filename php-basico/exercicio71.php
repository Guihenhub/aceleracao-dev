<?php
    require_once('ex_71/Correntista.php');
    require_once('ex_71/MovimentoConta.php');
    require_once('ex_71/OperacaoBanco.php');

    $correntista1 = new Correntista('111',350);
    $correntista2 = new Correntista('222',250);
    $correntista3 = new Correntista('333',250);
    $correntistas = array($correntista1, $correntista2, $correntista3);

    $operacaoBanco = new OperacaoBancoClass();
    
    var_dump($operacaoBanco->encontraCorrentista($correntistas, '111'));

?>