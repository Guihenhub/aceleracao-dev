<?php
    $alunos = array("Claúdio" => [5,7,8], "Cecília" => [8,9,10], "Joana" => [1,2,3]);

    foreach($alunos as $nome => $notas):
        $mediaPonderada = ($notas[0]*2 + $notas[1]*3 + $notas[2]*5)/10;
        echo "<br>"."Nome: ".$nome;
        echo "<br>"."Média: ".$mediaPonderada;
    endforeach;
?>