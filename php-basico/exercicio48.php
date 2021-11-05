<?php
    $uris = array('https://random-data-api.com/api/stripe/random_stripe',
            'https://random-data-api.com/api/stripe/random_stripe',
            'https://random-data-api.com/api/app/random_app',
            'https://random-data-api.com/api/beer/random_beer',
            'https://random-data-api.com/api/commerce/random_commerce',
            'https://random-data-api.com/api/device/random_device',
            'https://random-data-api.com/api/subscription/random_subscription');

    $arrayDados = array();

    $arquivo = fopen('api.txt','w');

    foreach ($uris as  $value) {
        $dados = file_get_contents($value);
        $array = json_decode($dados,true);
        $string = implode(',',$array); //Separamos cada array por virgulas
        fwrite($arquivo, $string."\r\n"); //Separamos os diferentes dados em diferentes linhas 
    }

    fclose($arquivo);

    
    $arquivo = fopen('api.txt','r');
    $conteudo = fread($arquivo, filesize('api.txt'));
    $vetorDados = explode("\r\n",$conteudo);  //Colocamos cada linha em uma posição do array que guarda as respostas

    foreach ($vetorDados as $valor) {
        $array = explode(',',$valor); //Colocamos o conteúdo de cada elemento do vetor como sendo um array.
        $json = json_encode($array);
        var_export($json);
        echo('<br>');
    }


?>