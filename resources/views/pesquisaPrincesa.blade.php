@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    <div class="card-body">
        <form action="{{route('procuraPrincesas')}}" method="GET">
            @csrf
            <div class="form-group py-4">
                <label for="texto">Texto para pesquisa</label>
                <input type="text" class="form-control" name="texto" 
                    placeholder="Informe o texto para pesquisar">
            </div>
            <button type="submit" class="btn btn-outline-primary btn-sm">Pesquisar</button>
            <button onclick="window.location.href='{{route('inicio')}}';" type="button" 
                    class="btn btn-outline-danger btn-sm">Cancelar</button>
        </form>
    </div> 
</div> 
</div>
@endsection