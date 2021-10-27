<?php
    $a = NULL;
    $b = "Pedro";
    $c = "Carro";
    $d = 1.0;
    $e = array("a" => 1, "b" => 2, "c" => 3);

    $variaveis = array($a,$b,$c,$d,$e);;
    
    foreach($variaveis as $variavel):
        verifica($variavel);
    endforeach;
    
    function verifica($variavel){
        if($variavel == NULL):
            echo "Variável nula"."<br>";
        elseif(is_array($variavel)):
            var_export($variavel);
        endif;
    }
?>