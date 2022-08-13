<?php
    for($i = 1; $i <= 150; $i++){
        $caminhoDiretorio = "./ex_49/{$i}";
        if(!is_dir($caminhoDiretorio)){
            mkdir($caminhoDiretorio);
            echo "Diretório {$i} criado <br>";
        }
        
        $horario = date('d-m-Y_H:i');
        
        
        if($i%2 != 0){
            $nomeArquivo = "$caminhoDiretorio/log-{$horario}.txt";
            
            $arquivo = fopen($nomeArquivo, 'w');
            echo "Arquivo log-{$horario} criado <br>";

            $info = pathinfo($nomeArquivo);
            $info['tamanho'] = filesize($nomeArquivo);
            var_dump($info);
        }
    }
?>