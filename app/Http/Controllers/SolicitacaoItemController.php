<?php

namespace App\Http\Controllers;

use App\Models\Solicitacoes_itens;
use Illuminate\Http\Request;
use App\Models\Solicitacoes_item;
use App\Models\Medicamentos;
use App\Models\Solicitacoes;
use App\Models\User;

class SolicitacaoItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitacaoItens = Solicitacoes_itens::all();
        return view('solicitacao-itens.index', compact('solicitacaoItens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamentos = Medicamentos::all();
        $solicitacoes = Solicitacoes::all();
        $usuarios = User::all();
        return view('solicitacao-itens.create', compact('medicamentos', 'solicitacoes', 'usuarios'));
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
            'medicamento_id' => 'required',
            'solicitacoes_id' => 'required',
            'quantidade_solicitada' => 'required',
            'data_solicitacao' => 'required',
        ]);

        $solicitacaoItem = new Solicitacoes_itens();
        $solicitacaoItem->medicamento_id = $request->input('medicamento_id');
        $solicitacaoItem->solicitacoes_id = $request->input('solicitacoes_id');
        $solicitacaoItem->quantidade_solicitada = $request->input('quantidade_solicitada');
        $solicitacaoItem->data_solicitacao = $request->input('data_solicitacao');
        $solicitacaoItem->save();

        return redirect()->route('solicitacao-itens.index')->with('success', 'Solicitação item criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitacaoItem = Solicitacoes_itens::find($id);
        return view('solicitacao-itens.show', compact('solicitacaoItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $solicitacaoItem = Solicitacoes_itens::find($id);
        $medicamentos = Medicamentos::all();
        $solicitacoes = Solicitacoes::all();
        $usuarios = User::all();
        return view('solicitacao-itens.edit', compact('solicitacaoItem', 'medicamentos', 'solicitacoes', 'usuarios'));
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
            'medicamento_id' => 'required',
            'solicitacoes_id' => 'required',
            'quantidade_solicitada' => 'required',
            'data_solicitacao' => 'required',
        ]);

        $solicitacaoItem = Solicitacoes_itens::find($id);
        $solicitacaoItem->medicamento_id = $request->input('medicamento_id');
        $solicitacaoItem->solicitacoes_id = $request->input('solicitacoes_id');
        $solicitacaoItem->quantidade_solicitada = $request->input('quantidade_solicitada');
        $solicitacaoItem->data_solicitacao = $request->input('data_solicitacao');
        $solicitacaoItem->save();

        return redirect()->route('solicitacao-itens.index')->with('success', 'Solicitação item atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $solicitacaoItem = Solicitacoes_itens::find($id);
        $solicitacaoItem->delete();
        return redirect()->route('solicitacao-itens.index')->with('success', 'Solicitação item excluída com sucesso!');
    }
}
