<?php
    $arquivo = fopen('dados.txt','w');

    for($i = 1; $i <= 700; $i++){
        fwrite($arquivo, $i."\n");
    }
?>