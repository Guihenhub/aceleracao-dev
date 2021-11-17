<?php
    $numeros = array();

    for ($i=0; $i < 15 ; $i++) { 
        array_push($numeros, rand());
    }

    function verificaParidade($num){
        if($num % 2 == 0){
            return true;
        }else{
            throw new Exception('Número não válido para essa operação',535);
        }
    }

    foreach ($numeros as $value) {
        try{
            verificaParidade($value);
        }catch(Exception $e){
            echo "{$e->getMessage()}"."<br>";
        }
    }
?>