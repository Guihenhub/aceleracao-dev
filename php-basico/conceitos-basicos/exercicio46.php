<?php
   $arraySexos = array('m' => 'masculino', 'f' => 'feminino');
   $homens = array('Joaquim' => '28,m','Pedro' => '13,m', 'joão' => '40,m');
   $mulheres = array('Ana' => '14,f','Beatriz' => '50,f', 'Joana' => '110,f');

   function imprimirDados($listaPessoas){
        foreach ($listaPessoas  as $key => $valor) {
            global $arraySexos;
            $arrayDados = explode(',',$valor);
            $idade = $arrayDados[0];
            $sexo = $arraySexos[$arrayDados[1]];
            echo "{$key} tem {$idade} de idade e é do sexo {$sexo}<br>";
        }
   }    

   imprimirDados($homens);
   imprimirDados($mulheres);
?>

