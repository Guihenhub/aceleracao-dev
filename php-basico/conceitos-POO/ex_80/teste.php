<?php
    require_once('./DVD.php');
    require_once('./Leite.php');
    require_once('./InformacaoNulaException.php');

    $leite = new Leite(codigo:'002',preco:4, marca:'Leite bom', volume:5, dataValidade: new DateTime('2020-01-01'));
    echo $leite->estaVencido().'<br>';

    try{
        $dvd = new DVD('001', 5, 'A volta dos que não foram', null);
    }catch(InformacaoNulaException $e){
        echo "O parâmetro {$e->getParametro()} está nulo"."<br>";
    } 
    
    
    $leite1 = new Leite(codigo:'001',preco:4, marca:'Leite bom', volume:5, dataValidade: new DateTime('201-01-01'));
    $leite2 = new Leite(codigo:'002',preco:5, marca:'Leite top', volume:7, dataValidade: new DateTime('2055-01-01'));
    $leite3 = new Leite(codigo:'003',preco:6, marca:'Leite de vaca', volume:5, dataValidade: new DateTime('2011-01-01'));
    $leite4 = new Leite(codigo:'004',preco:7, marca:'Leite massa', volume:3, dataValidade: new DateTime('2033-01-01'));
    $leite5 = new Leite(codigo:'005',preco:4, marca:'Leite bacana', volume:5, dataValidade: new DateTime('2033-01-01'));
    $leite6 = new Leite(codigo:'006',preco:4, marca:'Leiti', volume:5, dataValidade: new DateTime('2011-01-01'));
    
    $dvd1 =   $dvd = new DVD('007', 5, 'A volta dos que não foram', 2021);
    $dvd2 = new DVD('008', 3, 'A volta dos que não foram', 2021);
    $dvd3 = new DVD('009', 5, 'As tranças da vovó careca', 2000);
    $dvd4 = new DVD('0010', 1, 'Dolly citrus', 1990);
   
    $estoque = array(
        '001' => $leite1,
        '002' => $leite2,
        '003' => $leite3,
        '004' => $leite4,
        '005' => $leite5,
        '006' => $leite6,
        '007' => $dvd1,
        '008' => $dvd2,
        '009' => $dvd3,
        '0010' => $dvd4
    );

    $ano = 2021;
    $total = 0;
    foreach($estoque as $id =>$produto){
        if($produto instanceof Leite){
            if($produto->estaVencido()){
                echo "O leite $id está vencido"."<br>";
            }
        }else{
            if($produto->getAno() == $ano){
                echo "O Dvd $id foi lançado no ano $ano"."<br>";
            }
        }

        $total += $produto->getPreco();
    }

    echo "O preço total dos produtos foi R$$total";
?>