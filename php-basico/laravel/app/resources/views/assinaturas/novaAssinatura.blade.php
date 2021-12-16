@foreach ($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach

<form action="{{route('assinaturas.inserir')}}" method="post">
    @csrf
    
    <label for="qtdCaracteres">Quantidade de caracteres</label><br>
    <input type="text" id="qtdCaracteres"  placeholder="Digite aqui" name="qtdCaracteres" value="{{old('qtdAssinaturas')}}"><br><br>

    <label for="AssinaturaPadrao">Assinatura padrão</label><br>
    <input type="text" id="AssinaturaPadrao" placeholder="Digite aqui" name="AssinaturaPadrao" value="{{old('AssinaturaPadra')}}"><br><br>

    <label for="qtdAssinaturas">Quantidade de assinaturas</label><br>
    <input type="text" id="qtdAssinaturas" placeholder="Digite aqui" name="qtdAssinaturas" value="{{old('qtdAssinaturas')}}"><br><br>

    <input value= "Submeter" type="submit" >

   
</form>

<a href="{{route('documento.index')}}"><button>Voltar</button></a>
