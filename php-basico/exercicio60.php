<?php
    $caminhoArquivos = array('ex_60/arquivo1.txt','ex_60/arquivo2.txt','ex_60/arquivo3.txt');
    
    $dados = file_get_contents('https://jsonplaceholder.typicode.com/photos');
     
    foreach ($caminhoArquivos as $caminho) {
          $arquivo = fopen($caminho,'w');
          fwrite($arquivo, $dados);
    }

    unlink($caminhoArquivos[1]);

    foreach($caminhoArquivos as $caminho){
        try{
            $arquivo = fopen($caminho,'r');
            $dados = fread($arquivo,filesize($caminho));
            $dadosArray = json_decode($dados);

            var_export($dadosArray);

            fclose($arquivo);
        }catch(Excetion $e){
            echo "Arquivo $caminho não encontrado";
        }
    }
?>