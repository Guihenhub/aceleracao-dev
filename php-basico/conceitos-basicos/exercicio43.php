<?php
    $dir = 'fotos';
    $scan = scandir($dir);
    

    foreach($scan as $nome){
        if(in_array($nome, array('.','..'))){

        }else{
            var_dump(pathinfo($dir.'/'.$nome));
            echo '<br>';
        }
    }
?>