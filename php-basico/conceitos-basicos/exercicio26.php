<?php
    $var1 = rand(0,100);
    $var2 = rand(0,100);
    $var3 = rand(0,100);

    $variaveis = array($var1,$var2,$var3);

    verificaParidade($var1);
    verificaParidade($var2);
    verificaParidade($var3);

    //Passando valor por referência
    function verificaParidade(&$numero){
        if($numero % 2 == 0):
            echo $numero."<br>";
        else:
            $numero = $numero + 1;
        endif;
    }
?>