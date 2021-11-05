<?php
    $caminhoArquivos = array();

    for($i = 1; $i <= 150; $i++){
        $caminhoDiretorio = "./ex_49/{$i}";
        
        if(is_dir($caminhoDiretorio)){
           $arrayInformacoes = scandir($caminhoDiretorio); //Pega dados sobre o que possui no diretório.
           $possuiArquivo = false;

           foreach ($arrayInformacoes as $valor) {
                
                if(!in_array($valor, array('.','..'))){ //Possui alguem valor diferente de '.' e '..'.
                    $possuiArquivo = true;
                    $caminhoArquivo = "$caminhoDiretorio/$valor";
                    array_push($caminhoArquivos,$caminhoArquivo);
                }
           }
           
           if(!$possuiArquivo){
                rmdir($caminhoDiretorio);
           }
        }
    }

    foreach($caminhoArquivos as $caminho){
       $informacoes = pathinfo($caminho);
       $informacoes['Tamanho'] = filesize($caminho);

       var_export($informacoes);
    }
?>