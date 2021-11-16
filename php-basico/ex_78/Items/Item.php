<?php
    require_once('../Emprestimos.php');
    require_once('../Reservas.php');

    class Item{
        public function __construct(
            private int $id,
            private string $nome,
            private array $autores,
            private int $ano,
            private float $penalidadeAtraso,
            private int $tempoReservas,
            private Emprestimo $listaEmprestimos,
            private Reserva $listaReservas
        ){}

        public function estaEmprestado(){
            echo "Está esmprestado";
        }

        public function estaReservado(){
            echo "Está reservado";
        }

        public function setTempoReservas($tempoReservas){
            $this->tempoReservas = $tempoReservas;
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