<?php
    interface Animal{
        public function getNomeEspecie():string;
        public function getNomeAnimal():string;
    }

    class AnimalClass implements Animal{
        public function __construct(
            private string $nomeEspecie,
            private string $nomeAnimal
        ){}

        public function getNomeAnimal(): string
        {
            return $this->nomeAnimal;
        }

        public function getNomeEspecie(): string
        {
            return $this->nomeEspecie;
        }
    }
?>