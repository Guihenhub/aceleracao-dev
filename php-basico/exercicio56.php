<?php
    $diretorios = ['alunos','professores'];

    foreach ($diretorios as $key => $value) {
        if(!is_dir($value)){
            mkdir($value);
        }
    }
    
    foreach ($diretorios as $value) {
        
    }
    
    function verificaDiretorio($diretorio){
        if(is_dir($diretorio)){
            $possuiArquivo = false;
            $nomeArquivos = scandir($diretorio);
            
            foreach ($nomeArquivos  as $value) {
                if(!in_array($value, array('.','..'))){
                    $possuiArquivo = true;
                }
            }

            if(!$possuiArquivo){
                throw new Exception('Não pussui arquivo');
            }
        }
    }

    try{
        foreach ($diretorios as $value) {
            verificaDiretorio($value);
        }
    }catch(Exception $e){
        $arquivoLogs = fopen('logs.txt','w');
        $mensagem = $e->getMessage();
        $linha = $e->getLine();
        $arquivo = $e->getFile();

        fwrite($arquivoLogs, "Mensagem:$mensagem/Linha:$linha/Arquivo:$arquivo"."\r\n");
        echo "Message:{$e->getMessage()}/Line:{$e->getLine()}/File:{$e->getFile()}";
    }
     
?>