<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Princesas;
use Illuminate\Support\Facades\DB;
use App\Models\Tipos;
use App\Models\Elementos;
use App\Models\Reino;


class ControllerPrincesa extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = Princesas::all();
        return view('exibePrincesas', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos = Tipos::all();
        $elementos = Elementos::all();
        $reinos = Reino::all();

        return view('novaPrincesas', compact('tipos','elementos', 'reinos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = new Princesas();
        $dados->princesa_id = $request->input('princesa');
        $dados->elemento_id = $request->input('elemento_id');
        $dados->tipo_id = $request->input('tipo_id');
        $dados->reino_id = $request->input('reino_id');
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
        $dados = Princesas::find($id);
        if(isset($dados)){
            return view('editaPrincesa', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Princesas::find($id);
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
        $dados = Princesas::find($id);
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
