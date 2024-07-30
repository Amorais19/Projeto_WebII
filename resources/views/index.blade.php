@extends('layout')
@section('content')
<div class="container-fluid navbarzinha">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Bibble</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home</a>
            <a class="nav-item nav-link" href="#">Princesas</a>
            <a class="nav-item nav-link" href="#">Elementos</a>
            <a class="nav-item nav-link" href="#">Tipos</a>
            </div>
        </div>
    </nav>
</div>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-color">Princesas</h1>
    <p class="lead text-color">Este é um site para classificar princesas :) <br> Você pode ser tudo o que quiser! </p>
  </div>
</div>
<div class="container marketing">

<div class="row">
    <div class="col-lg-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
        <h2>Elementos</h2>
        <p>Cadastre aqui os elementos da natureza</p>
        <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
    </div>
    <div class="col-lg-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
        <h2>Tipos</h2>
        <p>Cadastre aqui os tipos de princesas existentes</p>
        <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
    </div>
    <div class="col-lg-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
        <h2>Reinos</h2>
        <p>Cadastre aqui os reinos conhecidos por você</p>
        <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
    </div>
    <div class="col-lg-3">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="160" height="160">
        <h2>Princesas</h2>
        <p>Cadastre aqui sua princesa, e suas características</p>
        <p><a class="btn btn-secondary" href="#" role="button">cadastrar &raquo;</a></p>
    </div>
</div>
@endsection
