<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;
use Illuminate\Support\Facades\DB;

class ControllerTipo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Tipos::all();
        return view('exibeTipos', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoTipo');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Tipos();
        $dados->Nome = $request->input('nomeTipo');
        $dados->save();
        return redirect('/tipo')->with('success', 'Novo tipo cadastrado com sucesso!');
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
        $dados = Tipos::find($id);
        if(isset($dados)){
            return view('editaTipos', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Tipos::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nomeTipo');
            $dados->save();
            return redirect('/tipo')->with('success', 'Tipo atualizado com sucesso!');
        }
        return redirect('/tipo')->with('danger', 'Erro ao tentar atualizar o tipo.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Tipos::find($id);
        
        if(isset($dados)){
            $dados->delete();
            return redirect('/tipo')->with('success', 'Tipo deletado com sucesso!');
        }
        return redirect('/tipo')->with('danger', 'Erro ao tentar deletar o tipo.');
        
    }

    public function pesquisarTipo(){
        return view('pesquisaTipo');
    }

    public function procurarTipo(Request $request){
        $nome = $request->input('nomeTipo');
        $dados = DB::table('tipos')->select('id', 'nomeTipo')
                 ->where(DB::raw('lower(nomeTipo)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirTiposs', compact('dados'));
    }
}
