<?php
    $arquivoLeitura = fopen('paises.txt', 'r');
    $arquivoEscrita = fopen('lista.csv','w');

    $tamanhoArquivo = filesize('paises.txt');

    $dados = fread($arquivoLeitura, $tamanhoArquivo); 
    $dadosArray = json_decode($dados, true);

    $cabecalho = array();

    foreach($dadosArray[0] as $chave => $valor):
        array_push($cabecalho, $chave);
    endforeach;

    
    $cabecalho_csv = implode(',',$cabecalho)."\r\n"; //id, nome, ...
    fwrite($arquivoEscrita, $cabecalho_csv);

    foreach($dadosArray as $valores){
        $dados = array();
        foreach($valores as $valor){
            array_push($dados, $valor);
        }
        $dadosCSV = implode(",",$dados)."\r\n";
        fwrite($arquivoEscrita, $dadosCSV);
    }
    
    fclose($arquivoEscrita);
    fclose($arquivoLeitura);
?>