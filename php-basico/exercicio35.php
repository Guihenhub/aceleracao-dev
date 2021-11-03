<?php
    $salario = 3400;

    $salarioMinimo = 1100;

    $imposto = 0;
    if($salario  >  3 * $salarioMinimo && $salario  <  5 * $salarioMinimo){
        $imposto = $salario * 0.1;
    }elseif($salario > 2*$salarioMinimo){
        $imposto = $salario * 0.05;
    }

    echo "Imposto: {$imposto}";
?>