<?php
    $array1 = array();
    $array2 = array();

    for($i = 0; $i < 20; $i++){
        array_push($array1, rand()); 
        array_push($array2, rand()); 
    }

    function soma($num1 , $num2){
        $soma = $num1 + $num2;

        if($soma < 0){
            $soma = 0;
        }

        return $soma;
    }
    
    $arquivo = fopen('ex_52.txt','w');

    for($i = 0; $i < 20; $i++){
        $num1 = $array1[$i];
        $num2 = $array2[$i];

        $resultado = soma($num1, $num2);
        fwrite($arquivo, "$num1,$num2,$resultado"."\r\n");
    }


?>