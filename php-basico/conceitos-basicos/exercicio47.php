<?php
    $conteudo = file_get_contents('https://random-data-api.com/api/business_credit_card/random_card');
    $array = json_decode($conteudo,true);
    $string = implode(',',$array);

    $arquivo = fopen('./cartao.txt','w');
    fwrite($arquivo, $string );
    fclose($arquivo);

    $arquivo = fopen('./cartao.txt','r');
    $dadosLidos = fread($arquivo, filesize('./cartao.txt'));

    $dadosArray = explode(',',$dadosLidos);
    var_dump($dadosArray);
    $dadosJson = json_encode($dadosArray);
    
    var_dump($dadosJson);
?>