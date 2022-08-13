<?php
    $key = 'Ajhdkajsg665612AAA8]0';

    $header = [
        'typ' => 'JWT',
        'alg' => 'HS256'
    ];

    $payload = [
        'uid' => 123,
        'email' => 'guilherme@email.com',
        'nivel' => 'administrador',
        'listaFavoritos' => 'favoritos'
    ];

    $header = json_encode($header);
    $payload = json_encode($payload);

    $header = base64_encode($header);
    $payload = base64_encode($payload);

    $sign = hash_hmac('sha256', $header. ".". $payload, $key, true);
    $sign = base64_encode($sign);

    print $header . "." . $payload. "." . $sign;    
?>