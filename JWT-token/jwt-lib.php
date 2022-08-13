<?php
    require_once "../vendor/autoload.php";
    require_once "./Pessoa.php";

    use Lcobucci\JWT\Configuration;
    use Lcobucci\JWT\Signer\Hmac\Sha256;
    use Lcobucci\JWT\Signer\Key\InMemory;

    function setToken(Pessoa $pessoa)
    {
        $configuration = Configuration::forSymmetricSigner(
            // You may use any HMAC variations (256, 384, and 512)
            new Sha256(),
            // replace the value below with a key of your own!
            InMemory::plainText('Ajhdkajsg665612AAA8]0')
            // You may also override the JOSE encoder/decoder if needed by providing extra arguments here
        );

        $time = new DateTimeImmutable();

        $token = $configuration->builder()
                            ->issuedBy("http://localhost:8000/api/")
                            ->permittedFor("http://localhost:8000/api/")
                            ->identifiedBy("87d9a8s7d9", true)
                            ->issuedAt($time)
                            ->canOnlyBeUsedAfter($time->modify('+1 minute'))
                            ->expiresAt($time->modify('+1 hour'))
                            ->withClaim('nome', $pessoa->getNome())
                            ->withClaim('email', $pessoa->getEmail())
                            ->withClaim('profissao', $pessoa->getProfissao())
                            ->withClaim('escolaridade', $pessoa->getEscolaridade())
                            ->getToken($configuration->signer(), $configuration->signingKey());   
                            
        $pessoa->setToken($token);
    }

    $pessoa1 = new Pessoa("Guilherme","guilherme@email.com","Programador","Ensino médio");
    $pessoa2 = new Pessoa("Jão","joao@email.com","Atoa","Ensino médio");
    $pessoa3 = new Pessoa("Maria","Maria@email.com","Professor de karate","Ensino superior");
    $pessoa4 = new Pessoa("Pedro","pedro@email.com","aviador","Doutor");
    $pessoa5 = new Pessoa("Moo","moo@email.com","político","Nenhuma");

    $pessoas = [$pessoa1,$pessoa2, $pessoa3, $pessoa4, $pessoa5];

    foreach($pessoas as $pessoa){
        setToken($pessoa);
    }

    var_dump($pessoa1);
?>