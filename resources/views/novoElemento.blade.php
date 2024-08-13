@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">Cadastre um novo elemento!</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoElemento')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeElemento">Informe o elemento:</label>
                <input type="text" class="form-control" name="nomeElemento" 
                       placeholder="Ex: Água">
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