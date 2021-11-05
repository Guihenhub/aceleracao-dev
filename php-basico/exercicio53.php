<?php
    $nota1 = array('Pedro'=> 1, 'Napoleao'=>2, 'Juliana'=>10, 
                    'Camila'=>0,'Matia'=>10,'Neuf'=>10,
                    'Capiro'=>3,'Mexilo'=>10,'Wool'=>10,
                    'Carlo'=>1,'Pedro'=>5,'Maua'=>10,
                    'Weber'=>11,'WWa'=>14,'Maua'=>10,'Carol'=>3) ;

    $nota2 = array('Pedro'=> 6, 'Napoleao'=>6, 'Juliana'=>11, 
                    'Camila'=>3,'Matia'=>15,'Neuf'=>1,
                    'Capiro'=>5,'Mexilo'=>10,'Wool'=>10,
                    'Carlo'=>2,'Pedro'=>5,'Maua'=>10,
                    'Weber'=>11,'WWa'=>15,'Maua'=>10,'Carol'=>3) ;


    $arquivo = fopen('ex_53.txt','w');

    foreach($nota1 as $chave => $valor){
        $aprovado = verificarAprovacao($nota1[$chave],$nota2[$chave]);

        if($aprovado){
            fwrite($arquivo,$chave."\r\n");
        }
    }

    function verificarAprovacao($n1, $n2){
        $aprovado = false;
        $soma = $n1 + $n2;        

        if($soma > 17 && $n1 > 7 && $n2 > 7){
            $aprovado = true;
        }

        return $aprovado;
    }
?>