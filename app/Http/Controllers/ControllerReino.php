<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reino;
use Illuminate\Support\Facades\DB;

class ControllerReino extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Reino::all();
        return view('exibeReinos', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoReino');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Reino();
        $dados->NomeReino = $request->input('nomeReino');
        $dados->save();
        return redirect('/reino')->with('success', 'Novo reino cadastrado com sucesso!');
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
        $dados = Reino::find($id);
        if(isset($dados)){
            return view('editaReinos', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Reino::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nomeReino');
            $dados->save();
            return redirect('/reino')->with('success', 'Reino atualizado com sucesso!');
        }
        return redirect('/reino')->with('danger', 'Erro ao tentar atualizar o reino.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Reino::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/reino')->with('success', 'Reino deletado com sucesso!');
        }
        return redirect('/reino')->with('danger', 'Erro ao tentar deletar o reino.');
    }

    public function pesquisarReino(){
        return view('pesquisaReino');
    }

    public function procurarReino(Request $request){
        $nome = $request->input('nomeReino');
        $dados = DB::table('reinos')->select('id', 'nomeReino')
                 ->where(DB::raw('lower(nomeReino)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirReinos', compact('dados'));
    }
}
