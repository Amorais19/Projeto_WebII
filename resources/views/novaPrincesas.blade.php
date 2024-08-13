@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border">
    <div class="card-body">
        <div class="jumbotron jumbotron-fluid">
            <div class="container-fluid">
                <h1 class="mt-5 text-center">Cadastre uma nova princesa!</h1>
            </div>
        </div>
        <form action="{{route('gravaNovaPrincesas')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nomePrincesa">Informe o nome da princesa:</label>
                <input type="text" class="form-control" name="nomePrincesa" 
                       placeholder="Ex: Aurora">
            </div>
            <br>
            <div class="form-group">
                <label for="idadePrincesa">Informe a idade da princesa:</label>
                <input type="text" class="form-control" name="idadePrincesa" 
                       placeholder="Ex: 18">
            </div>
            <br>
            <div class="form-group seletor">
                <div class="row">
                    <div class="col-sm-1">
                        <label for="elemento">Elementos</label><br />
                        <select name="elemento">
                                @foreach ($elementos as $item)
                                    <option value="{{$item->id}}">{{$item->Nome}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label for="tipo">Tipos</label><br />
                        <select name="tipo">
                                @foreach ($tipos as $item)
                                    <option value="{{$item->id}}">{{$item->Nome}}</option>
                                @endforeach
                        </select>
                    </div>
                    <div class="col-sm-1">
                        <label for="reino">Reino</label><br />
                        <select name="reino">
                                @foreach ($reinos as $item)
                                    <option value="{{$item->id}}">{{$item->Nome}}</option>
                                @endforeach
                        </select>
                    </div>
                </div>
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