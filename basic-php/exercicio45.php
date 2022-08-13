<?php
    $nomes = array('Ana','Beatriz','Carlos',
                    'Denny','Estefani','Felipe',
                    'Guilherme','Henrique','Igor',
                    'Jonas','Kamila','Luiz',
                    'Mario','Napoleão','Osvaldo');

    
    foreach($nomes as $nome):
        if(!is_dir("./pessoas/{$nome}")):
            mkdir("./pessoas/{$nome}");
        endif;

        $arquivo = fopen("./pessoas/{$nome}/{$nome}.txt",'w');

        fwrite($arquivo, "{$nome}");
    endforeach;
?>