<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield("titulo")</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{URL::asset('css/app.css')}}" rel="stylesheet"
          type="text/css"/>
    <!-- Styles -->
    <style>
        @yield("css")
    </style>
</head>
<body>
<div class="container">
    <div class="py-5 text-center">
        <h2>@yield("titulo")</h2>
    </div>

    @if (Session::has('errors'))
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(Session::has('mensagem'))
        <div class="alert alert-success">
            {{Session::get('mensagem')}}
        </div>
    @endif

    @if(Session::has('mensagemErro'))
        <div class="alert alert-success">
            {{Session::get('mensagemErro')}}
        </div>
    @endif
    <div>

        @yield("conteudo")
    </div>
</div>

@yield("javascript")
</body>
</html>


