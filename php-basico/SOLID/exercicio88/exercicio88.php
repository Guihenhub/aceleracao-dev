<?php
    interface Cliente{
        public function isValid():bool;
    }

    interface ClienteRepository{
        public function adicionarCliente(Cliente $cliente);
    }

    class ClienteService{
        public function AdicionarCliente(Cliente $cliente, ClienteRepository $clienteRepository)
        {
            if(!$cliente->isValid()){
                echo "Dados inválidos";
            }
            
            if($clienteRepository->adicionarCliente($cliente)){
                echo "Cliente cadastrado com sucesso";
            }else{
                echo "Error";
            }
        }
    }
?>