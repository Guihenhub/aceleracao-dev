<?php
    interface Pao{
        public function nome():string;
        public function valor():float;
    }

    class PaoSal implements Pao{
        public function nome():string{
            return "Pão de sal";
        }

        public function valor(): float
        {
            return 0.75;
        }
    }

    class PaoDoce implements Pao{
        public function nome():string{
            return "Pão de doce";
        }

        public function valor(): float
        {
            return 1.5;
        }
    }

    abstract class RecheioDecorator implements Pao{
        protected Pao $pao;

        public function __construct(Pao $pao)
        {
            $this->pao = $pao;
        }
    }

    class Salame extends RecheioDecorator{
        public function nome():string{
            return $this->pao->nome().': Salame';
        }

        public function valor():float
        {
            return $this->pao->valor() + 2;
        }
    }

    class Mussarela extends RecheioDecorator{
        public function nome():string{
            return $this->pao->nome().': Mussarela';
        }

        public function valor():float
        {
            return $this->pao->valor() + 1;
        }
    }

    class Margarina extends RecheioDecorator{
        public function nome():string{
            return $this->pao->nome().': Margarina';
        }

        public function valor():float
        {
            return $this->pao->valor() + 3;
        }
    }

    class Ovo extends RecheioDecorator{
        public function nome():string{
            return $this->pao->nome().': Ovo';
        }

        public function valor():float
        {
            return $this->pao->valor() + 0.5;
        }
    }

    class Geleia extends RecheioDecorator{
        public function nome():string{
            return $this->pao->nome().': Geleia';
        }

        public function valor():float
        {
            return $this->pao->valor() + 3.5;
        }
    }

    class PastaAmendoim extends RecheioDecorator{
        public function nome():string{
            return $this->pao->nome().': Pasta de Amendoin';
        }

        public function valor():float
        {
            return $this->pao->valor() + 1.5;
        }
    }

    $paoSal = new PaoSal();

    $paoSal1 = new Salame($paoSal);
    $paoSal2 = new Ovo($paoSal1);
    $paoSal3 = new Mussarela($paoSal2);
    $paoSal4 = new Margarina($paoSal3);

    $paoDoce = new PaoDoce();
    $paoDoce1 = new PastaAmendoim($paoDoce);
    $paoDoce2 = new Geleia($paoDoce1);

    echo $paoSal4->nome().":".$paoSal4->valor()."<br>";
    echo $paoDoce2->nome().":".$paoDoce2->valor();
?>