@extends('layouts.layout')
@section('titulo','Exibição de assinaturas')

@section('corpo')
    <h1>Assinaturas exibir</h1>
    ID : {{$assinatura['id']}} <br>
    Quantidade de caracteres : {{$assinatura['qtdCaracteres']}} <br>
    Assinatura padrão : {{$assinatura['AssinaturaPadrao']}} <br>
    Quantidade de assinaturas : {{$assinatura['qtdAssinaturas']}} <br>
    <a href="{{route('assinaturas.index')}}">Voltar</a>
@endsection