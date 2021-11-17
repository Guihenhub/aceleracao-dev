<?php
    require_once('ex_63/Porta.php');
    require_once('ex_63/Imovel.php');
    require_once('ex_63/Casa.php');
    require_once('ex_63/Edificio.php');
    
    $porta1 = new Porta(false, 'Marrom', 40,20,200);
    $porta2 = new Porta(false, 'Branca', 33,10,160);
    $porta3 = new Porta(true, 'Preta', 33,10,160);

    $casa = new Casa('Branca', array($porta1 , $porta2 , $porta3));
    
    $dadosCasa = array(
        'Cor' => $casa->getCor(),
        'Quantidade de portas'=> $casa->totalDePortas(),
        'Quantidade de portas abertas' => $casa->quantasPortasEstaoAbertas()
    );
    
    $edificio = new Edificio(cor: 'Branco', totalDePortas: 5, totalDeAndares: 15, portas: array($porta1,$porta2,$porta3));
    $edificio->adicionarAndar();
    $edificio->adicionarPorta($porta1);
    
    $dadosEdificio = array(
        'Cor' => $edificio->getCor(),
        'Quantidade de portas'=> $edificio->totalDePortas(),
        'Quantidade de portas abertas' => $edificio->quantasPortasEstaoAbertas(),
        'Quantidade de andares' => $edificio->totalDeAndares()
    );

    mostrarDados($dadosCasa);
    mostrarDados($dadosEdificio);

    function mostrarDados($array)
    {
        foreach($array as $chave => $valor){
            echo "{$chave} : {$valor}"."<br>";
        }
    }
?>