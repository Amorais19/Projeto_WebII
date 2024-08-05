<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Elementos;
use Illuminate\Support\Facades\DB;

class controllerReino extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Elemento::all();
        return view('exibirElementos', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoElemento');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Elemento();
        $dados->Nome = $request->input('nomeElemento');
        $dados->save();
        return redirect('/elementos')->with('success', 'Novo elemento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dados = Elementos::find($id);
        if(isset($dados)){
            return view('editarElementos', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Elemento::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nomeElemento');
            $dados->save();
            return redirect('/elementos')->with('success', 'Elemento atualizado com sucesso!');
        }
        return redirect('/elementos')->with('danger', 'Erro ao tentar atualizar o elemento.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Elemento::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/elementos')->with('success', 'Elemento deletado com sucesso!');
        }
        return redirect('/elementos')->with('danger', 'Erro ao tentar deletar o elemento.');
    }

    public function pesquisarElemento(){
        return view('pesquisaReino');
    }

    public function procurarElemento(Request $request){
        $nome = $request->input('nomeElemento');
        $dados = DB::table('elementos')->select('id', 'nomeElemento')
                 ->where(DB::raw('lower(nomeElemento)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirElementos', compact('dados'));
    }
}
