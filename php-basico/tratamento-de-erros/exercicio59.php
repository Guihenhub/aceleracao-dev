<?php
    try {
        dividir(1,0);
    } catch (Exception $e){
        echo "Mensagem: {$e->getMessage()} / Código: {$e->getCode()}";
    }

    function dividir($n1 , $n2 ){
        if($n2 == 0){
            throw new Exception('Divisão por zero', 523);
        }

        return $n1/$n2;
    }
?>