@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">Cadastre um novo tipo!</h1>
            </div>
        </div>
        <form action="{{route('gravaNovoTipo')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeTipo">Informe o tipo:</label>
                <input type="text" class="form-control" name="nomeTipo" 
                       placeholder="Ex: Sereia">
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