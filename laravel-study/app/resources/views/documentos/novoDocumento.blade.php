@extends('layouts.layout')
@section('titulo','Adição de novos documentos')

@section('corpo')
    @foreach ($errors->all() as $error)
        <p>{{$error}}</p>
    @endforeach

    <h1>Novo documento</h1>

    <form action="{{route('documento.inserir')}}" method="post">
        @csrf
        
        <label for="titulo">Titulo</label><br>
        <input type="text" id="titulo"  placeholder="Digite aqui" name="titulo" value="{{old('titulo')}}"><br><br>

        <label for="qtdAssinantes">Quantidade de assinantes</label><br>
        <input type="text" id="qtdAssinantes" placeholder="Digite aqui" name="qtdAssinantes" value="{{old('qtdAssinantes')}}"><br><br>

        <label for="assinatura">Assinaturas</label><br>
        <input type="text" id="assinatura" placeholder="Digite aqui" name="assinatura" value="{{old('assinatura')}}"><br><br>

        <label for="qtdPaginas">Quantidade de páginas</label><br>
        <input type="text" id="qtdPaginas" placeholder="Digite aqui" name="qtdPaginas" value="{{old('qtdPaginas')}}"><br><br>

        <input value= "Submeter" type="submit" >

    
    </form>

    <a href="{{route('documento.index')}}"><button>Voltar</button></a>
@endsection