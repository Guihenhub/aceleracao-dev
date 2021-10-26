<?php
    $dados = [-1,0,1,2,3,4,5,6,7,8,9,10];

    foreach($dados as $indice => $dado):
        if($dado % 2 == 0):
            echo $indice." => ".$dado;
            echo "<br>";
        endif;
    endforeach;
?>