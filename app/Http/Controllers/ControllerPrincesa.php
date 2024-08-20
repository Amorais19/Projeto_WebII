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
       
        //$dados = Princesas::with('elementos')->get();       //->with('tipos')->with('reinos')
        $dados = Princesas::all();
        foreach($dados as $item){
            $elemento = Elementos::find($item->elemento_id);
            
            $item->NomeElemento = $elemento->Nome;
        }
        foreach($dados as $item){
            $reino = Reino::find($item->reino_id);
            
            $item->NomeReino = $reino->Nome;
        }
        foreach($dados as $item){
            $tipo = Tipos::find($item->tipo_id);
            
            $item->NomeTipo = $tipo->Nome;
        }
        
        
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
        $TemTudo = true;
        $dados = new Princesas();
        $dados->elemento_id = $request->input('elemento');
        $dados->tipo_id = $request->input('tipo');
        $dados->reino_id = $request->input('reino');
        $dados->Nome = $request->input('nomePrincesa');
        $dados->Idade= $request->input('idadePrincesa');
        if(!isset($elemento_id)){
            $TemTudo = false;
        }if(!isset($tipo_id)){
            $TemTudo = false;
        }if(!isset($reino_id)){
            $TemTudo = false;
        }if(!($TemTudo)){
            return redirect('/princesas')->with('danger', 'Você precisa cadastrar um elemento, um tipo e um reino.');
        }
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
            return view('editaPrincesas', compact('dados'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dados = Princesas::find($id);
        if(isset($dados)){
            $dados->Nome = $request->input('nomePrincesa');
            $dados->Idade = $request->input('idadePrincesa');
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
