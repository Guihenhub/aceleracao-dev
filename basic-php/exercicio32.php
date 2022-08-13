<?php
    $salgados = array("Cochina","Empada","Quibe");
    $refrigerantes = array("Dolly","Coca cola","Fanta");
    $acompanhamento = array("Batata","Sorvete","Chocolate","Cerveja","Pão","Queijo","Waffle");

    verifica('salgados',$salgados);
    echo "<br>";
    Verifica("refrigerantes",$refrigerantes);
    echo "<br>";
    Verifica("acompanhamento",$acompanhamento);
    echo "<br>";

    function verifica($nomeCategoria,$array)
    {   
        $tamanhoArray = sizeof( $array);
        if($tamanhoArray < 3 || $tamanhoArray > 6){
            echo "A categoria {$nomeCategoria} não satisfaz os requisitos.<br>";
        }
        foreach($array as $indice=>$valor){
            echo "Indice: $indice / Valor: $valor <br>";
        }
    }
?>