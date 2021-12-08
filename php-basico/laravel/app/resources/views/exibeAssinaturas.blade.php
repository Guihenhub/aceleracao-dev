<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir documento</title>
    <style>
        h1{
           font-size: 30px;
           color:cadetblue;
        }

        p{
            font-size: 20px;
        }
    </style>
</head>
<body>
    <h1>Exercício 103</h1>
    ID : {{$assinatura['id']}} <br>
    Quantidade de caracteres : {{$assinatura['qtdCaracteres']}} <br>
    Assinatura padrão : {{$assinatura['AssinaturaPadrao']}} <br>
    Quantidade de assinaturas : {{$assinatura['qtdAssinaturas']}} <br>
    <a href="{{route('assinatura.index')}}">Voltar</a>
</body>
</html>