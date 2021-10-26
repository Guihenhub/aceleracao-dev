<?php
    $array1 = array("Curso"=>"PHP","Pessoa"=>"Joao","Loja"=>"Centro");
    $array2 = array("Curso"=>"Java","Pessoa"=>"Pedro","Loja"=>"Zona Sul");
    $array3 = array("Curso"=>"Python","Pessoa"=>"Clara","Loja"=>"Zona Oeste");
   
    foreach($array1 as $indice => $valor):
        echo $indice."=>".$valor."<br>";
    endforeach;

    foreach($array2 as $indice => $valor):
        echo $indice."=>".$valor."<br>";
    endforeach;

    foreach($array3 as $indice => $valor):
        echo $indice."=>".$valor."<br>";
    endforeach;
?>