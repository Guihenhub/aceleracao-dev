<?php


    class Usuario{
        public function __construct(
            private string $nome,
            private string $login,
            private string $senha,
            private int $masEmprestimos,
            private Emprestimo $listaEmprestimos,
            private Reserva $listaReservas
        ){}

        public function estaPunido()
        {
            echo "Está púnido";
        }

        public function getListaEmprestimos():Emprestimo
        {
            return $this->listaEmprestimos;
        }

        public function setListaEmprestimos(?Emprestimo $listaEmprestimos){
            $this->listaEmprestimos = $listaEmprestimos;
        }

        
        public function getListaReservas():Reserva
        {
            return $this->listaReservas;
        }
        
       
        public function setListaReservas(Reserva $listaReservas){
            $this->listaReservas = $listaReservas;
        }
    }
?>