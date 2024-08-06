@extends('layout')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4 text-color">Princesas</h1>
    <p class="lead text-color">Este é um site para classificar princesas :) <br> Você pode ser tudo o que quiser! </p>
  </div>
</div>
<div class="container marketing">

<div class="row">
    <div class="col-lg-3">
        <img class="rounded-circle" src="{{asset('storage/Imagens/elements.jpg')}}" alt="Elemento" width="160" height="160">
        <h2>Elementos</h2>
        <p>Cadastre aqui os elementos presentes na natureza que você conheça</p>
        <p><a class="btn btn-secondary" href="{{route('novoElemento')}}" role="button">cadastrar &raquo;</a></p>
    </div>
    <div class="col-lg-3">
        <img class="rounded-circle" src="{{asset('storage/Imagens/types.jpeg')}}" alt="Tipo" width="160" height="160">
        <h2>Tipos</h2>
        <p>Cadastre aqui os tipos de princesas existentes (ex: sereia, fada, humana)</p>
        <p><a class="btn btn-secondary" href="{{route('novoTipo')}}" role="button">cadastrar &raquo;</a></p>
    </div>
    <div class="col-lg-3">
        <img class="rounded-circle" src="{{asset('storage/Imagens/castle.jpeg')}}" alt="Reino" width="160" height="160">
        <h2>Reinos</h2>
        <p>Cadastre aqui os reinos existentes conhecidos por você (ex: Arendel...)</p>
        <p><a class="btn btn-secondary" href="{{route('novoReino')}}" role="button">cadastrar &raquo;</a></p>
    </div>
    <div class="col-lg-3">
        <img class="rounded-circle" src="{{asset('storage/Imagens/princess.jpeg')}}" alt="Princesa" width="160" height="160">
        <h2>Princesas</h2>
        <p>Cadastre aqui sua princesa, e suas características</p>
        <p><a class="btn btn-secondary" href="{{route('novaPrincesas')}}" role="button">cadastrar &raquo;</a></p>
    </div>
</div>
@endsection
