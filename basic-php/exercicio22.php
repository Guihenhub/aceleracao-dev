<?php
    $array0 = array(1,2,3,4,5);
    $array1 = array(6,2,6);
    $array2 = array(9,5,3);
    $array3 = array(0,-5,3);
    $array4 = array(0);

    $arrays = array($array0,$array1,$array2,$array3,$array4);

    foreach($arrays as  $numeroVetor => $array):
        echo "<br>Vetor:{$numeroVetor}<br>";
        foreach($array as $indice => $valores):
            echo "{$indice}=>{$valores}<br>";
        endforeach;
    endforeach;

    echo "<br>";
    foreach($arrays as  $numeroVetor => $array):
       var_export($array);
       echo "<br>";
    endforeach
?>