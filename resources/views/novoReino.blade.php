@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">Cadastre um novo reino!</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoReino')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeReino">Nome:</label>
                <input type="text" class="form-control" name="nomeReino" 
                       placeholder="Informe o nome da princesa">
            </div>
            <hr>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection