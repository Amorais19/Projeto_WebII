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
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">Este é um jumbotron modificado que ocupa todo o espaço horizontal de seu elemento pai.</p>
  </div>
</div>
@endsection
