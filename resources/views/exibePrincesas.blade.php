@extends('layout')
@section('content')
<div class="container py-4">
<div class="card border py-4">
    @if(session()->get('danger'))
        <div class="alert alert-danger">
            {{ session()->get('danger') }}
        </div><br />
    @elseif(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br />
    @endif
    <div class="card-body py-4">
        <h5 class="card-title" style="text-align: center">Cadastro de Princesas</h5>
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Elemento</th>
                        <th>Tipo</th>
                        <th>Reino</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados as $item)
                    <tr>
                        <td>{{ $item->Nome }}</td>
                        <td>{{ $item->Idade }}</td>
                       <!--
                        $i['nome'];
                        $i['elementos']['nome'];
                        -->

                        <td style="text-align:center">
                            <a href="/princesas/edita/{{$item->id}}" class="btn btn-outline-primary">Editar</a>
                        </td>
                        <td style="text-align:center">
                            <a href="/princesas/apagar/{{$item->id}}" class="btn btn-outline-danger" 
                               onclick="return confirm('Tem certeza de que deseja remover?');">Deletar</a>
                        </td>
                    </tr>  
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
</div>
@endsection,
