<?php
    $json = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes");
    $array = json_decode($json);

    $arquivo = fopen('paises.txt','w');
?>