<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Princesa;
use Illuminate\Support\Facades\DB;

class controllerPrincesa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Princesa::all();
        return view('exibirPrincesa', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novaPrincesa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Princesa();
        $dados->nomePrincesa = $request->input('nomePrincesa');
        $dados->idade= $request->input('idadePrincesa');
        $dados->save();
        return redirect('/princesas')->with('success', 'Nova princesa cadastrada com sucesso!');
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
        $dados = Princesa::find($id);
        if(isset($dados)){
            return view('editarPrincesa', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Princesa::find($id);
        if(isset($dados)){
            $dados->nomePrincesa = $request->input('nomePrincesa');
            $dados->idade = $request->input('idadePrincesa');
            $dados->save();
            return redirect('/princesas')->with('success', 'Princesa atualizada com sucesso!');
        }
        return redirect('/princesas')->with('danger', 'Erro ao tentar atualizar a princesa.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dados = Princesa::find($id);
        if(isset($dados)){
            $dados->delete();
            return redirect('/princesas')->with('success', 'Princesa deletada com sucesso!');
        }
        return redirect('/princesas')->with('danger', 'Erro ao tentar deletar princesa.');
    }

    public function pesquisarPrincesa(){
        return view('pesquisaPrincesa');
    }

    public function procurarPrincesa(Request $request){
        $nome = $request->input('nomePrincesa');
        $dados = DB::table('princesas')->select('id', 'nomePrincesa', 'idade')
                 ->where(DB::raw('lower(nomePrincesa)'), 'like', '%' . strtolower($nome) . '%')->get();
        return view('exibirPrincesa', compact('dados'));
    }
}
