@extends('layouts.layout')
@section('titulo','Listagem de documentos')
@section('corpo')
    <h1>Documentos listagem</h1>
    @if(session("mensagem"))
        <p style="color:green">{{session("mensagem")}}</p>
    @endif

    @if(session("erro"))
         <p style="color:rgb(231, 0, 0)">{{session("erro")}}</p>
    @endif
    <p>
        <fieldset>
            <legend>Listagem dos documentos</legend>
            @foreach($documentos as $documento)
                    <hr>
                    <a href="{{route('documento.exibir', $documento['id'])}}">Visualizar {{$documento['id']}}</a>
                    <br> {{$documento}}  <br>

                
                    <form action="{{route('documento.deletar',$documento->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type = "submit" value = "Deletar">
                    </form>

            @endforeach
        </fieldset>
       
    </p>

    <a href="{{route('documento.novo')}}"><button>Adicionar</button></a>
@endsection
