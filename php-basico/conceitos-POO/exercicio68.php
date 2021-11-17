<?php
    require_once('ex_68/Animal.php');
    require_once('ex_68/Ferramentas.php');
    require_once('ex_68/Resultado.php');

    $animal1 = new AnimalClass('Peixe','José');
    $animal2 = new AnimalClass('Gato','Pedro');
    $animal3 = new AnimalClass('Peixe gato', 'Ana');
    $animal4 = new AnimalClass('Gato','Igor');
    $animal5 = new AnimalClass('Peixe gato', 'Flavia');

    $ferramentas = new FerramentasClass();
    $animais = [$animal1, $animal2, $animal3, $animal4, $animal5];
    
    function calculaQuantidade(array $animal, Ferramentas $ferramentas):array{
        $listaEspecie = $ferramentas->classificaEspecies($animal); 
       
        $resultados = array();

        foreach($listaEspecie as $especie){
            $array = $ferramentas->filtraEspecia($animal,$especie);
 
            $resultado = new Resultado($especie, count($array));
            
            array_push($resultados, $resultado);
        }   
  
        return $resultados;
    }

    $resultados = calculaQuantidade($animais, $ferramentas);
    
    foreach($resultados as $resultado){
        $nome = $resultado->getNomeEspecie();
        $quantidade = $resultado->getQuantidade();

        echo "$nome : $quantidade"."<br>";
    }
?>