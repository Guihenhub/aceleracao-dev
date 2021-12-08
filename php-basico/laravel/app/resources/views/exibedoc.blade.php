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
    <h1>Exercício 3</h1>
    ID : {{$documento['id']}} <br>
    Titulo : {{$documento['titulo']}} <br>
    Quantidade de assinantes : {{$documento['qtdAssinantes']}} <br>
    Quantidade de páginas : {{$documento['qtdPaginas']}} <br><br>

    <a href="{{route('documento.index')}}">Voltar</a>
</body>
</html>