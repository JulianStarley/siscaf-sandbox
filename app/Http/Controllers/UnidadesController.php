<?php

namespace App\Http\Controllers;

use App\Models\Unidades;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidades::all();
        return view('unidades.index', compact('unidades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'unidades' => 'required',
        'populacao_adstrita' => 'required',
        'distancia_caf' => 'required',
        'distancia_referencia_modulo' => 'required',
        'funcionarios_responsaveis' => 'required',
        'telefone' =>'required',
        'observacao' => 'required',
        'ativo' => 'required',
        ]);

        $unidades = new Unidades();
        $unidades->unidades = $request->input('unidades');
        $unidades->populacao_adstrita = $request->input('populacao_adstrita');
        $unidades->distancia_caf = $request->input('distancia_caf');
        $unidades->distancia_referencia_modulo = $request->input('distancia_referencia_modulo');
        $unidades->funcionarios_responsaveis = $request->input('funcionarios_responsaveis');
        $unidades->telefone = $request->input('telefone');
        $unidades->observacao = $request->input('observacao');
        $unidades->ativo = $request->input('ativo');
        $unidades->save();

        return redirect()->route('unidades.index')->with('success', 'Unidade cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unidades = Unidades::find($id);
        return view('unidades.show', compact('unidades'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidades = Unidades::find($id);
        return view('unidades.edit',  compact('unidades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'unidades' => 'required',
            'populacao_adstrita' => 'required',
            'distancia_caf' => 'required',
            'distancia_referencia_modulo' => 'required',
            'funcionarios_responsaveis' => 'required',
            'telefone' => 'required',
            'observacao' => 'required',
            'ativo' => 'required',

        ]);

        $unidades = Unidades::find($id);
        $unidades->unidades = $request->input('unidades');
        $unidades->populacao_adstrita = $request->input('populacao_adstrita');
        $unidades->distancia_caf = $request->input('distancia_caf');
        $unidades->distancia_referencia_modulo = $request->input('distancia_referencia_modulo');
        $unidades->funcionarios_responsaveis = $request->input('funcionarios_responsaveis');
        $unidades->telefone = $request->input('telefone');
        $unidades->observacao = $request->input('observacao');
        $unidades->ativo = $request->input('ativo');
        $unidades->save();

        return redirect()->route('unidades.index')->with('success', 'Unidade alterada com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidades = Unidades::find($id);
            if ($unidades){
                $unidades->delete();
                return redirect()->route('unidades.index')->with('success', 'Unidade excluída com sucesso');
            }else{
                return redirect()->route('unidades.index')->with('error', 'Unidade não encontrada');
            }
        }
    }

