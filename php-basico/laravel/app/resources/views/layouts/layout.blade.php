<!DOCTYPE html>
<html lang="{{config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('titulo')</title>

    <style>
        h1{
            color:darkcyan
        }

        fieldset{
            border-radius: 10px
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>
            <a href="{{route('documento.index')}}"><button>Documentos</button></a>
            <a href="{{route('assinaturas.index')}}"><button>Assinaturas</button></a>
        </legend>
        @yield('corpo')
    </fieldset>
</body>
</html>


   
