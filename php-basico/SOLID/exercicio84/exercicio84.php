<?php
    $db;

    function emailToClients(array $clients){
        foreach($clients as $client){
            emailToClient($client);
        }
    }

    function emailToClient($client){
        $clienteRecord = findClient($client);
        $ativo = verifyClient($client);
        if($ativo){
            email($clienteRecord);
        }
    }

    function findClient($client){
        $clienteRecord = $db->find($client);
    }


    function verifyClient($client){
        return $client->isActive();
    }

    function email($client){
        //...Envia o e-mail....\\
    }
?>