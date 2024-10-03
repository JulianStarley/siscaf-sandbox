<?php

namespace App\Http\Controllers;

use App\Models\TipoPessoa;
use App\Http\Requests\StoreTipoPessoaRequest;
use App\Http\Requests\UpdateTipoPessoaRequest;
use Request;

class TipoPessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StoreTipoPessoaRequest  $request)
    {
        $tipoPessoas = TipoPessoa::paginate(50);

        return view('tipoPessoa.index', compact('tipoPessoa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipoPessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipoPessoaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoPessoaRequest $request)
    {
        $tipoPessoa = new TipoPessoa();
        $tipoPessoa->nome = $request->input('tipoPessoa');
        $tipoPessoa->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function show(TipoPessoa $tipoPessoa)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoPessoa $id)
    {
        $tipoPessoa = TipoPessoa::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoPessoaRequest  $request
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoPessoaRequest $request, TipoPessoa $id)
    {
        $tipoPessoa = TipoPessoa::find($id);
        $tipoPessoa->nome = $request->input('tipoPessoa');
        $tipoPessoa->save();
        return redirect()->route('tipoPessoa.index')->with('successo', 'Tipo de pessoa alterada com sucesso');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoPessoa  $tipoPessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoPessoa $id)
    {
        $tipoPessoa = TipoPessoa::find($id);
        $tipoPessoa->delete();
        return redirect()->route('tipoPessoa.index')->with('success', 'Tipo excluído com sucesso');
    }
}
