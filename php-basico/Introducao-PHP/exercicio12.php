<?php
    $numeros = [];

    for($i = 0; $i < 16; $i++):
        $numeros[$i] = rand(1,100);
    endfor;

    $media = 0;
    for($i = 0; $i < 16; $i++):
        $media +=  $numeros[$i];
    endfor;

    $media /= count($numeros);

    var_export($numeros);
    echo "<br>";
    print("Média : ".$media);
?>  