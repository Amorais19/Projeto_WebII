<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UACompatible" content="ie=edge">
    <title>Bibble</title>
    @vite(['resources/js/app.js'])
</head>
<body class="centralizando">
    <div class="container-fluid navbarzinha">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="{{route('inicio')}}">Bibble</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link active" href="{{route('inicio')}}">Home</a>
                <a class="nav-item nav-link" href="{{route('exibePrincesas')}}">Princesas</a>
                <a class="nav-item nav-link" href="{{route('exibeElemento')}}">Elementos</a>
                <a class="nav-item nav-link" href="{{route('exibeTipo')}}">Tipos</a>
                <a class="nav-item nav-link" href="{{route('exibeReino')}}">Reino</a>
                </div>
            </div>
        </nav>
        
    </div>
    @hasSection ('content')
        @yield ('content')
    @endif
</body>
</html>