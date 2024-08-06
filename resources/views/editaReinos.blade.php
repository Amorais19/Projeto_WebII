@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron">
            <div class="container">
                <h1 class="mt-5 text-center">Atualize os dados do reino</h1>
            </div>
        </div>
        <form action="/tipos/{{$dados->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomeReino">Nome:</label>
                <input type="text" class="form-control" name="nomeReino" 
                       value="{{$dados->Nome}}">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Salvar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection