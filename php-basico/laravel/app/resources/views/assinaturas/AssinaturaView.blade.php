<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos</title>
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
    
        @if(session("mensagem"))
            <p style="color:green">{{session("mensagem")}}</p>
        @endif
        <p>
            @foreach($assinaturas as $assinatura)
                 <a href="{{route('assinaturas.exibir', $assinatura['id'])}}">Visualizar {{$assinatura['id']}}</a> {{$assinatura}}  <br>
                 <form action="{{route('assinaturas.deletar',$assinatura->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type = "submit" value = "Deletar">
                </form>
            @endforeach

        </p>

        <a href="{{route('assinaturas.novo')}}"><button>Adicionar</button></a>
</body>
</html>