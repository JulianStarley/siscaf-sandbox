<?php

namespace App\Http\Controllers;

use App\Models\Medicamentos;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('medicamentos.index', compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    $medicamento = new Medicamentos();
    $medicamento->medicamento = $request->input('medicamento');
    $medicamento->codigo = $request->input('codigo');
    $medicamento->ativo = $request->input('ativo');
    $medicamento->quantidade = $request->input('quantidade');
    $medicamento->validade = $request->input('validade');
    $medicamento->lote = $request->input('lote');
    $medicamento->cod_barras = $request->input('cod_barras');
    $medicamento->fator_embalagem = $request->input('fator_embalagem');
    $medicamento->observacao = $request->input('observacao');
    $medicamento->user_id = $request->input('user_id');
    $medicamento->save();

   return redirect()->route('medicamentos.index')->with('success', 'Dados  do medicamento cadastrados com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamentos = Medicamentos::find($id);
        return view ('medicamentos.show', compact('medicamentos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicamentos = Medicamentos::find($id);
        return view('medicamentos.edit', compact('medicamentos'));
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
        {
            $medicamento = Medicamentos::find($id);
            $medicamento->medicamento = $request->input('medicamento');
            $medicamento->codigo = $request->input('codigo');
            $medicamento->ativo = $request->input('ativo');
            $medicamento->quantidade = $request->input('quantidade');
            $medicamento->validade = $request->input('validade');
            $medicamento->lote = $request->input('lote');
            $medicamento->cod_barras = $request->input('cod_barras');
            $medicamento->fator_embalagem = $request->input('fator_embalagem');
            $medicamento->observacao = $request->input('observacao');
            $medicamento->save();
            return redirect()->route('medicamentos.index')->with('success', 'Medicamento alterado com sucesso');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicamento = Medicamentos::find($id);
        $medicamento->delete();
        return redirect()->route('medicamentos.index');
    }


}
