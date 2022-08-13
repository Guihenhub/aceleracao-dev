
@extends('layouts.layout')
@section('titulo','Listagem de assinaturas')

@section('corpo')

<h1>Assinatura listagem</h1>

@if(session("mensagem"))
    <p style="color:green">{{session("mensagem")}}</p>
@endif
<p>
    <fieldset>
        <legend>Listagem das assinaturas</legend>
        @foreach($assinaturas as $assinatura)
        <hr>
            <a href="{{route('assinaturas.exibir', $assinatura['id'])}}">Visualizar {{$assinatura['id']}}</a> 
            <br>{{$assinatura}}  <br>
            <form action="{{route('assinaturas.deletar',$assinatura->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type = "submit" value = "Deletar">
            </form>
        @endforeach
    </fieldset>
</p>

<a href="{{route('assinaturas.novo')}}"><button>Adicionar</button></a>

@endsection