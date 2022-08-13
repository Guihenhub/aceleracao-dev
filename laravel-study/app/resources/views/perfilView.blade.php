<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
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
    <h1>Exercício 1</h1>
    <hr>
        <p>
            @foreach($usuario as $indice=>$valor)
                {{$indice}}=>{{$valor}}<br>
            @endforeach
        </p>
    <h1>Exercício 2</h1>
        <p>
            @foreach($documentos as $documento)
                {{$documento}}<br>
            @endforeach
        </p>
</body>
</html>