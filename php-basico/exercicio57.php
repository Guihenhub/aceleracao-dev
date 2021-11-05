<?php
    try {
        escreverNome(NULL);
    } catch (Exception $e) {
        $mensagem = $e->getMessage();
        $line = $e->getLine();
        $file = $e->getFile();

        $dados = array($mensagem,$line,$file);

        echo json_encode($dados);
    }

    function escreverNome($nome){ 
        if(in_array($nome, array('',NULL))){
            throw new Exception('Nome ínvalido');
        }

        echo $nome;
    }
?>