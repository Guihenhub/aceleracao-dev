<?php
    $listaAlunos1 = array("1"=>"Ana","2"=>"Carlos");
    $listaAlunos2 = array("3"=>"Catarina","2"=>"Zoro");

    echo "Array 1"."<br>";
    foreach($listaAlunos1 as $indice => $aluno):
        echo $indice."=>".$aluno."<br>";
    endforeach;

    echo "<br>"."Array 2"."<br>";
    foreach($listaAlunos2 as $indice => $aluno):
        echo $indice."=>".$aluno."<br>";
    endforeach;

    
    $listaCompleta = array_merge($listaAlunos1,$listaAlunos2);
    echo "<br>"."Lista completa"."<br>";
    var_export($listaCompleta);
?>