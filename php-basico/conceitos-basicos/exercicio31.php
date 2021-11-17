<?php
    $resultado = file_get_contents('https://rickandmortyapi.com/api');
   
    if(isset($resultado)){
        if(is_array(($resultado))){
            var_dump($resultado);
        }
    }else{
        echo "Você não pode continuar <br>";
    }
?>