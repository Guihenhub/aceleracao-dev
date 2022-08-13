@extends('layouts.layout')
@section('titulo','Exibição de documentos')

@section('corpo')
    <h1>Documentos exibir</h1>
    ID : {{$documento['id']}} <br>
    Titulo : {{$documento['titulo']}} <br>
    Quantidade de assinantes : {{$documento['qtdAssinantes']}} <br>
    Quantidade de páginas : {{$documento['qtdPaginas']}} <br><br>

    <a href="{{route('documento.index')}}">Voltar</a>
@endsection