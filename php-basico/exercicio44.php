<?php
    
    $numCeps = array(35681125,78040550,45823490,79014866,4728050);
    
    function buscarDados($cep){
        $uri = "https://viacep.com.br/ws/{$cep}/json";

        $curl = curl_init($uri );
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        
        return curl_exec($curl);
    }
    
    $ceps = array();
    foreach($numCeps as $cep){
        $dados = buscarDados($cep);
        $array = json_decode($dados, true);
        array_push($ceps, $array);
    }

    $cepsJson = json_encode($ceps);

    $arquivoCeps = fopen('ceps.txt','w');
    fwrite($arquivoCeps, $cepsJson);

?>