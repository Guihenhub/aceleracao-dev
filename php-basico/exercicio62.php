<?php
    class Ponto{
        public function __construct(private array $posicao = array(0,0)){
            $this->posicao = $posicao; 
        }

        public function calculaPosicaoRelativa(Ponto $ponto2):array{
            $xRelativo = $this->posicao[0] - $ponto2->posicao[0];
            $yRelativo = $this->posicao[1] - $ponto2->posicao[1];
            
            $posRelativa = array($xRelativo, $yRelativo);

            return $posRelativa;
        }

        public function calculaDistancia(Ponto $ponto): float{
            $diferenca = $this->calculaPosicaoRelativa($ponto);
            $distancia = sqrt($diferenca[0]^2 + $diferenca[1]^2);

            return $distancia;
        }

        public function getPosicao():array{
            return $this->posicao;
        }

        public function setPosicao(array $posicao){
            $this->posicao = $posicao;
        }
    }

    $origen = new Ponto();
    $ponto1 = new Ponto(array(3,3));
    $ponto2 = new Ponto(array(1,1));

    $arrayDados = array(
        'x'=> $ponto1->getPosicao()[0],
        'y'=> $ponto1->getPosicao()[1],
        'Distância da origem'=> $ponto1->calculaDistancia($origen),
        'Distância do ponto 2' => $ponto1->calculaDistancia($ponto2),
        'Posição relativa ao ponto 2' => $ponto1->calculaPosicaoRelativa($ponto2)
    );

    foreach($arrayDados as $chave => $valor){
        echo "{$chave} : {$valor}"."<br>";
    }
?>